<?php

require __DIR__."/vendor/autoload.php";

use Aspose\Words\WordsApi;
use Aspose\Words\Model\Requests\ConvertDocumentRequest;

$appSid = "##################################";
$appKey = "##############################";
$wordsApi = new WordsApi($appSid, $appKey);

$request = new ConvertDocumentRequest("cv.pdf", "docx");
$result = $wordsApi->convertDocument($request);
// Save an output file as "sample.docx"
rename($result->getPathname(), 'cv.docx');

?>