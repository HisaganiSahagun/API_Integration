<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Integrating API Final Project</title>
   
</head>
<body>
    <div class="translator-container">
        <h1>Langauge Translator</h1>
        <h3>Using Google Translate API</h3>
        <input
  placeholder="Type something here...."
  class="input"
  name="text"
  type="text"
  id="source-text">

     <br>
     <br>
        <select id="from-language">
            <option value="auto">Auto Detect</option>
            <option value="ar">Arabic</option>
            <option value="zh-CN">Chinese (Simplified)</option>
            <option value="nl">Dutch</option>
            <option value="en">English</option>
            <option value="fi">Finnish</option>
            <option value="fil">Filipino (Tagalog)</option>
            <option value="fr">French</option>
            <option value="de">German</option>
            <option value="id">Indonesian</option>
            <option value="it">Italian</option>
            <option value="ja">Japanese</option>
            <option value="ko">Korean</option>
            <option value="pl">Polish</option>
            <option value="pt">Portuguese</option>
            <option value="ru">Russian</option>
            <option value="es">Spanish</option>
            <option value="sv">Swedish</option>
            <option value="th">Thai</option>
            <option value="tr">Turkish</option>
            <option value="vi">Vietnamese</option>
        </select>
       <br>
       <br>
       
        <select id="to-language">
        <option value="ar">Arabic</option>
        <option value="zh-CN">Chinese (Simplified)</option>
        <option value="nl">Dutch</option>
        <option value="en">English</option>
        <option value="fi">Finnish</option>
        <option value="fil">Filipino (Tagalog)</option>
        <option value="fr">French</option>
        <option value="de">German</option>
        <option value="id">Indonesian</option>
        <option value="it">Italian</option>
        <option value="ja">Japanese</option>
        <option value="ko">Korean</option>
        <option value="pl">Polish</option>
        <option value="pt">Portuguese</option>
        <option value="ru">Russian</option>
        <option value="es">Spanish</option>
        <option value="sv">Swedish</option>
        <option value="th">Thai</option>
        <option value="tr">Turkish</option>
        <option value="vi">Vietnamese</option>
        </select>
        <br>
        <br>
        <button id="translate-btn">
            <span class="text">Translate</span></button>
        <button id="swap-btn">
            <span class="text">Swap</span>
        </button>
        <div id="translated-text"></div>
    </div>
</body>
<script src="js/script.js"></script>
</html>
