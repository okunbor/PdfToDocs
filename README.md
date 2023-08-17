
This a project to convert pdf file to docs file using " Aspose Cloud SDK Api".

:: Run " composer install " to install dependencies . 


    Documentaton link :  https://docs.aspose.cloud/display/wordscloud/Home   .


Get your Api keys and use the convert.php file .

Examples :

    require __DIR__."/vendor/autoload.php";

    use Aspose\Words\WordsApi;

    use Aspose\Words\Model\Requests\ConvertDocumentRequest;

    $appSid = "#########################";

    $appKey = "#####################";

    $wordsApi = new WordsApi($appSid, $appKey);

    $request = new ConvertDocumentRequest("yourPDFfile.pdf", "docx");

    $result = $wordsApi->convertDocument($request);

    // Save an output file as "sample.docx"

    rename($result->getPathname(), 'OutputName.docx');


