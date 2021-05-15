<?php

namespace Tiptap\HTML\Marks;

class Subscript extends Mark
{
    public function matching()
    {
        return $this->DOMNode->nodeName === 'sub';
    }

    public function data()
    {
        return [
            'type' => 'subscript',
        ];
    }
}
