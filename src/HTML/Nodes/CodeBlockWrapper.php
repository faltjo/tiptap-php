<?php

namespace Tiptap\HTML\Nodes;

class CodeBlockWrapper extends Node
{
    public function matching()
    {
        return $this->DOMNode->nodeName === 'pre';
    }

    public function data()
    {
        return null;
    }
}
