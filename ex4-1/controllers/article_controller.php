<?php

function articles_all() {
    $article = artiles_get();    
    return $article;
}

function articles_single($id) {
    $article = artiles_get();    
    return $article[$id-1];
}

function artiles_get() {
    $arr1 = array("id" => 1, "title" => "Жогорку Кенеш сегодня рассмотрит постановление «О лишении статуса экс-президента Атамбаева»", "date" => "2019-01-30", "content" => '<div class="text" id="news_text" style="overflow: hidden;">
          
    
      <script src="/uiall-css/aki_gallery/jquery.mobile.custom.min.js"></script>
      <link rel="stylesheet" type="text/css" href="/uiall-css/aki_gallery/aki_gallery.css?1">
      <script src="/uiall-css/aki_gallery/aki_gallery.js?1"></script>
    
    <p><b>Бишкек (АКИpress)</b> – Жогорку Кенеш 27 июня 2019 года утвердил повестку дня. На последней сессии депутаты рассмотрят 16 вопросов, в том числе намерены рассмотреть постановление «О лишении статуса экс-президента Кыргызской Республики <a href="http://who.ca-news.org/people:1664">А.Ш.Атамбаева</a>».</p>
<p>Какие вопросы будут рассмотрены?</p>
<p>1. Поправки в закон «О всеобщей воинской обязанности граждан Кыргызской Республики, о военной и альтернативной службах» (вносится на третье чтение);</p>
<p>2. Ратификация Кредитного соглашения между Кыргызской Республикой и Азиатским банком развития по проекту «Повышение устойчивости водных ресурсов к изменению климата и стихийным бедствиям» и Грантового соглашения между Кыргызской Республикой и Азиатским банком развития по проекту «Повышение устойчивости водных ресурсов к изменению климата и стихийным бедствиям», подписанных 31 декабря 2018 года в городе Бишкек» (вносится на третье чтение);</p>
<p>3. Ратификация Соглашения о предоставлении займа (Стандартные операции (на льготных условиях) (Проект соединительной дороги, Коридоры ЦАРЭС 1 и 3, Фаза 2 – Дополнительное финансирование) между Кыргызской Республикой и Азиатским банком развития, подписанного 28 декабря 2018 года в городе Бишкек, и Соглашения о предоставлении гранта (Специальные операции) (Проект соединительной дороги, Коридоры ЦАРЭС 1 и 3, Фаза 2 – Дополнительное финансирование) между Кыргызской Республикой и Азиатским банком развития, подписанного 28 декабря 2018 года в городе Бишкек» (вносится на третье чтение);</p>
<p>4. Поправки в закон «О государственных наградах и почетных званиях Кыргызской Республики» (вносится на третье чтение);</p>
<p><strong>5. О проекте постановления Жогорку Кенеша «О лишении статуса экс-президента Кыргызской Республики А.Ш.Атамбаева»</strong></p>
<p>6. О проекте конституционного Закона «О внесении изменений в конституционные законы Кыргызской Республики «О выборах Президента Кыргызской Республики и депутатов Жогорку Кенеша Кыргызской Республики», «О референдуме Кыргызской Республики» (вносится на третье чтение);</p>
<p>7. О проекте Закона «О внесении изменений в Закон Кыргызской Республики «О выборах депутатов местных кенешей» (вносится на третье чтение);</p>
<p>8. О проекте Закона «О внесении изменений в Закон Кыргызской Республики «Об избирательных комиссиях по проведению выборов и референдумов Кыргызской Республики» (вносится на третье чтение);</p>
<p>9. О проекте закона «О внесении изменений в некоторые законодательные акты Кыргызской Республики (в законы «О местном самоуправлении», «О статусе депутатов местных кенешей», «О статусе столицы», «О статусе города Ош»)» (вносится на третье чтение);</p>
<p>10. О проекте закона «О ратификации Протокола о присоединении Кыргызской Республики к Соглашению о перемещении озоноразрушающих веществ и содержащей их продукции и учете озоноразрушающих веществ при осуществлении взаимной торговли государств - членов Евразийского экономического союза от 29 мая 2015 года, подписанного 12 августа 2016 года в городе Сочи» (вносится на второе чтение);</p>
<p>11. О проекте закона «О ратификации Соглашения между Правительством Кыргызской Республики и Правительством Литовской Республики об освобождении от визовых требований владельцев дипломатических паспортов, подписанного 21 ноября 2018 года в городе Вильнюс» (вносится на второе чтение);</p>
<p>12. О проекте закона «О ратификации Протокола о внесении изменений и дополнений в Соглашение между Правительством Кыргызской Республики и Правительством Российской Федерации об оказании технического содействия Кыргызской Республике в рамках процесса присоединения к Евразийскому экономическому союзу от 31 марта 2015 года, подписанного 24 декабря 2018 года в городе Москва» (вносится на первое чтение);</p>
<p>13. О проекте закона «О запрещении деятельности, связанной с геологическим изучением недр с целью поиска, разведки и разработкой урановых, ториевых месторождений в Кыргызской Республике» (вносится на первое чтение);</p>
<p>14. Об утверждении нового члена в состав Совета по отбору судей Кыргызской Республики (о Абдырашитове Т.А.);</p>
<p>15. Об утверждении члена в состав Дисциплинарной комиссии при Совете судей Кыргызской Республики;</p>
<p>16. Правительственный час»: Об информации правительства о состоянии обеспечения населения Кыргызской Республики питьевой водой.</p>
<p>Для лишения статуса экс-президента ЖК необходимо набрать 81 голос.</p>
    <div class="aki_gallery_full_block"></div><div class="aki_gallery_full_bg"></div>
  
    <script async="" src="//www.instagram.com/embed.js"></script>
  
        </div>');
    $arr2 = array("id" => 2, "title" => "Title 2", "date" => "2019-01-30", "content" => "<p><img src='https://24.kg/thumbnails/81ec9/7f063/102921_w263_h198.jpeg'><br/>Депутаты Жогорку Кенеша в&nbsp;законопроекте «Об&nbsp;амнистии» нашли ошибки. Об&nbsp;этом стало известно сегодня на&nbsp;заседании.</p>");
    $article[0] = $arr1;
    $article[1] = $arr2;
    return $article;
}

?>