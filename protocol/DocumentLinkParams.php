<?php

namespace LanguageServerProtocol;

class DocumentLinkParams
{
    /**
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    public function __construct(TextDocumentIdentifier $textDocument)
    {
        $this->textDocument = $textDocument;
    }
}
