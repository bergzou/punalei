<?php


namespace addons\ldcms\controller;


use addons\ldcms\model\Category;
use addons\ldcms\model\Document;
use think\Response;

class Sitemap extends Base
{
    protected $noNeedLogin = ['*'];
    protected $options = [
        'item_key'  => '',
        'root_node' => 'urlset',
        'item_node' => 'url',
        'root_attr' => 'xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:mobile="http://www.baidu.com/schemas/sitemap-mobile/1/"'
    ];

    public function index()
    {
        $list=[];
        $categoryModel = Category::instance();
        $categoryData = $categoryModel->getHomeCategoryData();
        $documentModel = Document::instance();

        // 根目录，如果有更新时间，建议取最新文章的更新时间，这里暂时用今天
        $list[]= $this->makeNode('', date('Y-m-d'), '1.00'); 

        if (isset($categoryData['data'])) {
            foreach ($categoryData['data'] as $item) {
                // 生成栏目节点的 URL
                $lastmod = isset($item['update_time']) ? date('Y-m-d', $item['update_time']) : date('Y-m-d');
                $list[] = $this->makeNode($item['url'], $lastmod, '0.80');

                // 获取该栏目下的所有文章
                $doclist = $documentModel->getHomeList(['cid' => $item['id']]);
                foreach ($doclist as $doc) {
                    $doc_lastmod = isset($doc['update_time']) ? date('Y-m-d', $doc['update_time']) : date('Y-m-d');
                    $list[] = $this->makeNode($doc['url'], $doc_lastmod);
                }
            }
        }

        return Response::create($list, 'xml', 200, [], $this->options);
    }

    // 生成结点信息
    private function makeNode($link, $date, $priority = 0.60)
    {
        return [
            'loc'      =>request()->domain() .$link,
            'priority' => $priority,
            'lastmod'=>$date,
            'changefreq'=>'Always'
        ];
    }
}