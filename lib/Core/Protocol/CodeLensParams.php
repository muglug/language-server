<?php

namespace Phpactor\LanguageServer\Core\Protocol;

use LanguageServerProtocol\TextDocumentIdentifier;

class CodeLensParams
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
