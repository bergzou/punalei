<?php

namespace addons\ldcms\utils;

use think\Paginator;


class Bootstrap extends Paginator
{
    /**
     * 上一页按钮
     * @param string $text
     * @return string
     */
    protected function getPreviousButton($text = "")
    {
        $icon = '<i class="iconfont icon-arrow-left-bold"></i>';
        $text = $text ?: $icon;

        if ($this->currentPage() <= 1) {
            return $this->getDisabledTextWrapper($text);
        }

        $url = $this->url($this->currentPage() - 1);
        return $this->getPageLinkWrapper($url, $text);
    }

    /**
     * 下一页按钮
     * @param string $text
     * @return string
     */
    protected function getNextButton($text = "")
    {
        $icon = '<i class="iconfont icon-arrow-right-bold"></i>';
        $text = $text ?: $icon;

        if (!$this->hasMore) {
            return $this->getDisabledTextWrapper($text);
        }

        $url = $this->url($this->currentPage() + 1);
        return $this->getPageLinkWrapper($url, $text);
    }

    /**
     * 页码按钮
     * @return string
     */
    protected function getLinks()
    {
        if ($this->simple)
            return '';

        $block = [
            'slider' => null
        ];

        $side = 2;
        $window = $side * 2;

        if ($this->lastPage < $window + 1) {
            $block['slider'] = $this->getUrlRange(1, $this->lastPage);
        } elseif ($this->currentPage <= $window) {
            $block['slider'] = $this->getUrlRange(1, $window + 1);
        } elseif ($this->currentPage > ($this->lastPage - $window)) {
            $block['slider'] = $this->getUrlRange($this->lastPage - $window, $this->lastPage);
        } else {
            $block['slider'] = $this->getUrlRange($this->currentPage - $side, $this->currentPage + $side);
        }

        return $this->getUrlLinks($block['slider']);
    }

    /**
     * 渲染分页html
     * @return string
     */
    public function render()
    {
        if ($this->hasPages()) {
            return sprintf(
                '<div class="global-paging">%s %s %s</div>',
                $this->getPreviousButton(),
                $this->getLinks(),
                $this->getNextButton()
            );
        }
        return '';
    }

    /**
     * 生成一个可点击的按钮
     * @param string $url
     * @param int|string $page
     * @return string
     */
    protected function getAvailablePageWrapper($url, $page)
    {
        return sprintf(
            '<a class="item" href="%s">%s</a>',
            htmlentities($url),
            $page
        );
    }

    /**
     * 生成一个禁用的按钮
     * @param string $text
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
        return sprintf(
            '<a class="item disabled">%s</a>',
            $text
        );
    }

    /**
     * 生成一个激活的按钮
     * @param string $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        return sprintf(
            '<a class="item active">%s</a>',
            $text
        );
    }

    /**
     * 批量生成页码按钮
     * @param array $urls
     * @return string
     */
    protected function getUrlLinks(array $urls)
    {
        $html = '';
        foreach ($urls as $page => $url) {
            $html .= $this->getPageLinkWrapper($url, $page);
        }
        return $html;
    }

    /**
     * 生成普通页码按钮
     * @param string $url
     * @param int $page
     * @return string
     */
    protected function getPageLinkWrapper($url, $page)
    {
        if ($page == $this->currentPage()) {
            return $this->getActivePageWrapper($page);
        }
        return $this->getAvailablePageWrapper($url, $page);
    }



    // 在 Bootstrap 分页类中添加/修改以下方法
    /**
     * 解决URL路径问题
     * @param int $page
     * @return string
     */
    public function url($page)
    {
        // 获取当前 URL 基础路径
        $baseUrl = $this->options['path'] ?? request()->baseUrl();

        // 移除可能的 .html 后缀（如果有）
        $baseUrl = preg_replace('/\.html$/', '', $baseUrl);

        // 确保以 .html 结尾
        $baseUrl .= '.html';

        // 构建查询参数
        $query = request()->get();

        // 更新 page 参数
        $query['page'] = $page;

        // 构建完整 URL
        return $baseUrl . '?' . http_build_query($query);
    }
}