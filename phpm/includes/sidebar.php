<?php
session_start();

if($_SESSION["valid_user"] != session_id()){
    header("Location: /phpm/index.php");
    exit;
}
if(isset($_REQUEST["logout"])){
    unset($_SESSION["valid_user"]);
    session_destroy();
    header("Location: /phpm/index.php");
    exit;
}
?>
<ol id="qna">
    <h3>
        <li value="1" >Har du tidigare erfarenhet av utveckling med PHP?</li>
    </h3>
    <p>Nej det är min första gång jag kodar med php.</p>
    <h3>
        <li>Hur har du valt att strukturera upp dina filer och kataloger?</li>
    </h3>
    <p>Jag har försökt köra exemplet som du hade lagt ut men
        jag får den inte att fungera så jag kommer använda samma filnamn med olik innehåll.</p>
    <h3>
        <li>Har du följt guiden, eller skapat på egen hand?</li>
    </h3>
    <p>Jag har följt den.</p>
    <h3>
        <li>Har du gjort några förbättringar eller vidareutvecklingar av guiden (om du följt denna)?</li>
    </h3>
    <p>jag har gjort förbättring men tagit inspiration ifrån den.</p>
    <h3>
        <li>Vilken utvecklingsmiljö har du använt för uppgiften (Editor, webbserver etcetera)?</li>
    </h3>
    <p>Jag har använt Phpstorm och XAMPP. Jag har också laddat ner php.</p>
    <h3>
        <li>Har något varit svårt med denna uppgift?</li>
    </h3>
    <p>Det var svårt att förstå uppgiften första gången jag läste instruktionerna men
        efter att jag läst den flera gånger känns det bra.</p>
</ol>