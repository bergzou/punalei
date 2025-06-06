<?php
return[
    //    -- 1.1.0 --
    [
        'group' => 'SEO页面标题',
        'type' => 'custom',
        'name' => 'shuoming',
        'title' => '',
        'setting' => [],
        'value' => '',
        'content' => '{"value1":"title1","value2":"title2"}',
        'tip' => '',
        'rule' => '',
        'visible' => '',
        'extend' => '<p class="alert alert-info-light">'."\n"
            .'<b>自定义页面标题</b> （支持使用标签或文字）<br>'."\n"
            .'全局标签：{$ld.sitetitle}站点标题 <br>'."\n"
            .'栏目页标签：{$category.seo_title}栏目SEO名称、{$category.name}栏目标题<br>'."\n"
            .'详情页标签：{$content.title}内容标题<br>'."\n"
            .'搜索页标签：{$search}搜索关键字<br>'."\n"
            .'以下配置参数不设置时将使用系统默认规则。</p>',
    ],
    [
        'group' => 'SEO页面标题',
        'type' => 'string',
        'name' => 'index_title',
        'title' => '首页标题',
        'setting' => [],
        'value' => '{$ld.sitetitle}-LDCMS',
        'content' => '{"value1":"title1","value2":"title2"}',
        'tip' => '示例：{$ld.sitetitle}-LDCMS',
        'rule' => '',
        'visible' => '',
        'extend' => '',
    ],
    [
        'group' => 'SEO页面标题',
        'type' => 'string',
        'name' => 'list_title',
        'title' => '栏目页标题',
        'setting' => [],
        'value' => '',
        'content' => '{"value1":"title1","value2":"title2"}',
        'tip' => '示例：{$category.seo_title}-{$ld.sitetitle}',
        'rule' => '',
        'visible' => '',
        'extend' => '',
    ],
    [
        'group' => 'SEO页面标题',
        'type' => 'string',
        'name' => 'detail_title',
        'title' => '详情页标题',
        'setting' => [],
        'value' => '',
        'content' => '{"value1":"title1","value2":"title2"}',
        'tip' => '示例：{$content.title}-{$category.seo_title}-{$ld.sitetitle}',
        'rule' => '',
        'visible' => '',
        'extend' => '',
    ],
    [
        'group' => 'SEO页面标题',
        'type' => 'string',
        'name' => 'search_title',
        'title' => '搜索结果页标题',
        'setting' => [],
        'value' => '',
        'content' => '{"value1":"title1","value2":"title2"}',
        'tip' => '示例：{$search}-{$ld.sitetitle}',
        'rule' => '',
        'visible' => '',
        'extend' => '',
    ],
    [
        'group' => '基础',
        'type' => 'bool',
        'name' => 'simple',
        'title' => '开启手机端简洁分页',
        'rule' => '',
        'setting' => [
            'table' => '',
            'conditions' => '',
            'key' => '',
            'value' => '',
        ],
        'value' => '1',
        'content' => '{"1":"开启","0":"关闭"}',
        'tip' => '',
        'visible' => '',
        'extend' => '',
    ],
    [
        'group' => '基础',
        'type' => 'string',
        'name' => 'main_domain',
        'title' => '网站主域名',
        'rule' => '',
        'setting' => [
            'table' => '',
            'conditions' => '',
            'key' => '',
            'value' => '',
        ],
        'value' => '',
        'content' => '',
        'tip' => '',
        'visible' => '',
        'extend' => '',
    ],
    [
        'group' => '伪静态',
        'type' => 'custom',
        'name' => 'rewrite_mode_tip',
        'title' => '',
        'setting' => [],
        'value' => '',
        'content' => '{"value1":"title1","value2":"title2"}',
        'tip' => '',
        'rule' => '',
        'visible' => '',
        'extend' => '<p class="alert alert-info-light">'."\n"
            .'<b>多语言路由模式说明</b><br>'."\n"
            .'变量模式（http://example.com?lg=zh-cn）、目录模式（http://example.com/zh-cn/）、子域名模式（http://zh-cn.example.com） <br>'."\n"
            .'使用子域名模式需要在多语言列表中绑定域名。<br></p>',
    ],
    [
        'group' => '伪静态',
        'type' => 'radio',
        'name' => 'rewrite_mode',
        'title' => '多语言路由模式',
        'rule' => '',
        'setting' => [
            'table' => '',
            'conditions' => '',
            'key' => '',
            'value' => '',
        ],
        'value' => '0',
        'content' => [
            '变量模式',
            '目录模式',
            '子域名模式',
        ],
        'tip' => '',
        'visible' => '',
        'extend' => '',
    ],
    [
        'group' => '基础',
        'type' => 'bool',
        'name' => 'is_form_email',
        'title' => '表单发送邮件',
        'rule' => '',
        'setting' => [
            'table' => '',
            'conditions' => '',
            'key' => '',
            'value' => '',
        ],
        'value' => '0',
        'content' => '{"1":"开启","0":"关闭"}',
        'tip' => '如果配置表单发送邮件，必须先至<code>常规管理>系统配置>邮件配置</code>中配置邮件服务器',
        'visible' => '',
        'extend' => '',
    ],
    [
        'group' => '基础',
        'type' => 'string',
        'name' => 'to_email',
        'title' => '接收人邮箱',
        'rule' => '',
        'setting' => [
            'table' => '',
            'conditions' => '',
            'key' => '',
            'value' => '',
        ],
        'value' => '',
        'content' => '',
        'tip' => '',
        'visible' => '',
        'extend' => ' placeholder="请输入接收人邮箱"',
    ],
    [
        'group' => '其它',
        'type' => 'image',
        'name' => 'document_noimage',
        'title' => '文档默认缩略图',
        'setting' => [],
        'value' => '/assets/addons/ldcms/noimage.png',
        'content' => '',
        'tip' => '',
        'rule' => '',
        'visible' => '',
        'extend' => '',
    ],
    [
        'group' => '其它',
        'type' => 'image',
        'name' => 'category_noimage',
        'title' => '栏目默认缩略图',
        'setting' => [],
        'value' => '/assets/addons/ldcms/noimage.png',
        'content' => '',
        'tip' => '',
        'rule' => '',
        'visible' => '',
        'extend' => '',
    ],
    [
        'group' => '其它',
        'type' => 'image',
        'name' => 'slider_noimage',
        'title' => '轮播图默认图片',
        'setting' => [],
        'value' => '/assets/addons/ldcms/noimage.png',
        'content' => '',
        'tip' => '',
        'rule' => '',
        'visible' => '',
        'extend' => '',
    ],
];