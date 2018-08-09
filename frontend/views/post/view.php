<?php use common\components\DeviceDetect;
use frontend\components\SocialsWidget;

;?>
<section class="section_top">
    <div class="section_top_page">
        <img class="parallax"
             src="<?php echo !empty($postTranslation->attachment_url) ? '/images/' . DeviceDetect::getDeviseType() . '/' . $postTranslation->attachment_url : ''; ?>"

             alt="">
        <div class="title_page">
            <h5 class="title_block">Наши статьи</h5>
            <span class="title_page_line"></span>
        </div>
        <span class="bg_page"></span>
    </div>
    <div class="button_set">
        <?php try {
            echo SocialsWidget::widget();
        } catch (Exception $e) {
        } ?>
    </div>
</section>
<!--END MAIN SLIDER-->
<!--BEGIN ABOUT FIRM -->
<main class="main_section animation">
    <svg class="main_section_top" viewBox="0 0 1130 5000">
        <path d="M 1128 0  L 1128 113 L 2 113 L 2 5000"/>
    </svg>
    <div class="main_section_content">
        <div class="main_section_text">
            <div class="aside_main">
                <form action="" class="search">
                    <input type="search" placeholder="Поиск">
                    <button type="submit" class="set_search"><i class="icon-search"></i></button>
                </form>
                <div class="about_list">
                    <p class="about_list_title">
                        УСЛУГИ
                    </p>
                    <ul class="about_list_link">
                        <li><a href="#" class="active">Уголовное право</a></li>
                        <li><a href="#">Семейное право</a></li>
                        <li><a href="#">Интеллектуальная собственность</a></li>
                        <li><a href="#">Разрешение споров</a></li>
                        <li><a href="#">Недвижимость и земельное право</a></li>
                        <li><a href="#">Корпоративное право и M&A</a></li>
                    </ul>
                    <svg class="about_list_line" viewBox="0 0 3 500">
                        <path d="M 0 0 L 0 500"/>
                    </svg>
                </div>
            </div>
            <article class="full_news">
                <h1 class="full_news_title">Открытие представительства иностранной компании в Украине — преимущества
                    и недостатки</h1>
                <div class="full_news_img">
                    <img src="img/full-news.png" alt="">
                </div>
                <time><i class="icon-time"></i> 14.07.2017</time>
                <div class="full_news_text">
                    <p>Открытие иностранного представительства является наиболее распространенным и относительно легким
                        способом открытия бизнеса в Украине для иностранных фирм. Но в этой разновидности инвестирования
                        есть несколько отличий по сравнению с регистрацией нового предприятия.
                    </p>
                    <h3>Правовые основы деятельности</h3>
                    <p>Главный документ, который позволяет действовать иностранному представительству — это
                        доверенность. Она выдается руководителю представительства
                        Представительство не обладает статусом юридического лица. Все операции проводятся от имени и в
                        интересах главной (материнской) компании.
                    </p>
                    <h4>Регистрация</h4>
                    <p>На основе норм Закона Украины «О внешнеэкономической деятельности» зарубежные компании имеют
                        право открывать на территории Украины свои представительства.
                        Регистрацией занимается центральный орган исполнительной власти, который отвечает за
                        экономическую политику.
                        В Украине этим органом является Министерство экономического развития и торговли Украины.
                        Кроме закона, порядок регистрации регулируется специальной инструкцией, утвержденной приказом
                        Министерства внешних экономических связей и торговли Украины от 18.01.1996.
                    </p>
                    <h4>Срок регистрации — 60 рабочих дней.</h4>
                    <p><b>Стоимость регистрации</b> (государственная пошлина) — 2500 долларов США. Надо отметить, что
                        оформление всех необходимых документов, оплата услуг специалистов — это отдельные расходы.</p>
                    <h4>Список документов для регистрации:</h4>
                    <ul>
                        <li>Заявление (форма сборки — свободная);</li>
                        <li>Выписка из торгового (банковского) реестра страны резидента;</li>
                        <li>Документ из банка в котором официально открыт счет;</li>
                        <li>Доверенность;</li>
                    </ul>
                    <h5>Виды представительства</h5>
                    <p>В целом подобные представительства делятся на 2 категории:</p>
                    <ul>
                        <li>Постоянные, с правом ведения хозяйственной деятельности;</li>
                        <li>Другие (некоммерческие), или такие, которые не занимаются хозяйственной деятельностью.</li>
                    </ul>
                    <h5>Налогообложение</h5>
                    <p>Постоянные иностранные представительства платят практически такие же налоги и сборы, как и
                        резиденты Украины.
                        Но, надо заметить, что в Налоговом кодексе регулирования этого вопроса очень запутанное.
                        Налоговый кодекс также разделяет представительства на постоянные и не постоянны. Согласно этому
                        документу, если у представительства являются доходы — оно считается постоянным, при отсутствии
                        доходов представительство не относится к постоянному.</p>
                    <h5>Открытие банковского счета в Украине</h5>
                    <p>Процедура открытия счета прописана в специальной инструкции НБУ (№ 492).
                        В зависимости от разновидности представительства, можно открыть счет типа «Н» или «П».
                        Между этими типами счетов есть большая разница. Для постоянного представительства Подходит счет
                        типа «П», который дает возможность получать активные доходы, то есть заниматься хозяйственной
                        деятельностью. Представительство, у которого не имеет права ведения хоз. деятельности, открывает
                        счет типа «Н».</p>
                    <h5>Ведение кадровой работы</h5>
                    <p>Кадровая политика является исключительным делом руководителя представительства. Согласно его
                        полномочий, зафиксированных в доверенности, он имеет право самостоятельно подбирать кадры.
                        Но, трудовые книжки работников ведутся и хранятся в Генеральной дирекции Киевского городского
                        совета по обслуживанию представительств нерезидентов Украины на основе договора.
                        Представительство не имеет права самостоятельно вести трудовые книжки своих работников.</p>
                    <h5>Наличие плюсов и минусов</h5>
                    <p>К преимуществам работы через представительство относится не многое, а именно::</p>
                    <ul>
                        <li>Возможность принять на работу иностранного работника без разрешения (согласно норм Закона
                            Украины «О занятости населения»;
                        </li>
                        <li>Право не создавать рабочие места для инвалидов (в соответствии с письмом Фонда социальной
                            защиты №1 / 6-417).
                        </li>
                    </ul>
                    <h6>Минусов больше и они существенные.</h6>
                    <ol>
                        <li>Большой минус кроется в том, что ответственность представительства является
                            неограниченной. Например, общество с ограниченной ответственностью рискует только своим
                            уставным капиталом и имуществом. А вот нести ответственность за иностранное
                            представительство будет нести материнская компания. Это особый важнй фактор на который нужно
                            обаритить внимание крупным международным корпорациям с многомиллиардным капиталом. Большие
                            риски потери своих активов серьезно пугают инвесторов.
                        </li>
                        <li>Неоднозначная трактовка законов, которые являются регуляторами деятельности и
                            налогообложения иностранных представительств. Этот фактор провоцирует различные проверки со
                            стороны государственных органов, и может стать поводом для необоснованного привлечения к
                            ответственности. В большей степени это относится к налогообложению.
                        </li>
                        <li>Слишком дорога и сложна процедура закрытия иностранного представительства и вывод
                            активов.
                            Учитывая такое неудобство в осуществлении деятельности иностранного представительства в
                            Украине наиболее универсальной формой ведения бизнеса остаётся общество с ограниченной
                            ответственностью (ООО).
                        </li>
                    </ol>
                </div>
            </article>
            <a href="#" class="link_before"><i class="icon-left-arrow"></i>Вернуться ко всем новостям</a>

        </div>
        <!--BEGIN MORE NEWS-->
        <div class="more_new animation">
            <svg class="more_new_line" viewBox="0 0 2000 3">
                <path d="M 2000 0 L 0 0"/>
            </svg>
            <h5 class="more_new_title">Так же Вас может заинтересовать...</h5>
            <div class="more_new_list">
                <article class="article_min">
                    <div class="article_min_img">
                        <img src="img/article2.png" alt="">
                    </div>
                    <div class="article_min_content">
                        <div class="article_min_text">
                            <h1 class="article_min_title"><a href="#">Повседневная практика показывает, что сложившаяся
                                    ст</a>
                            </h1>
                            <time><i class="icon-time"></i>14.07.2017</time>
                            <div class="article_min_text_wrap">
                                <p>Повседневная практика показывает, что сложившаяся структура организации
                                    представляет собой интересный эксперимент проверки систем массового участия. Идейные
                                    соображения
                                    высшего порядка, а также постоянный количественный рост и сфера нашей активности
                                    позволяет
                                    выполнять важные задания по разработке системы обучения кадров, соответствует
                                    насущным
                                    потребностям. Задача организации, в особенности же сложившаяся структура организации
                                    требуют
                                    определения и уточнения новых предложений</p>
                                <div class="article_min_social">
                                    <div class="social_block">
                                        Поделиться
                                        <a href="#">$</a>
                                        <a href="#">$</a>
                                        <a href="#">$</a>
                                    </div>
                                    <a href="#" class="link_news">Читать всю новость <i class="icon-right-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article_min">
                    <div class="article_min_img">
                        <img src="img/article2.png" alt="">
                    </div>
                    <div class="article_min_content">
                        <div class="article_min_text">
                            <h1 class="article_min_title"><a href="#">Повседневная практика показывает, что сложившаяся
                                    ст</a>
                            </h1>
                            <time><i class="icon-time"></i>14.07.2017</time>
                            <div class="article_min_text_wrap">
                                <p>Повседневная практика показывает, что сложившаяся структура организации
                                    представляет собой интересный эксперимент проверки систем массового участия. Идейные
                                    соображения
                                    высшего порядка, а также постоянный количественный рост и сфера нашей активности
                                    позволяет
                                    выполнять важные задания по разработке системы обучения кадров, соответствует
                                    насущным
                                    потребностям. Задача организации, в особенности же сложившаяся структура организации
                                    требуют
                                    определения и уточнения новых предложений</p>
                                <div class="article_min_social">
                                    <div class="social_block">
                                        Поделиться
                                        <a href="#">$</a>
                                        <a href="#">$</a>
                                        <a href="#">$</a>
                                    </div>
                                    <a href="#" class="link_news">Читать всю новость <i class="icon-right-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article_min">
                    <div class="article_min_img">
                        <img src="img/article2.png" alt="">
                    </div>
                    <div class="article_min_content">
                        <div class="article_min_text">
                            <h1 class="article_min_title"><a href="#">Повседневная практика показывает, что сложившаяся
                                    ст</a>
                            </h1>
                            <time><i class="icon-time"></i>14.07.2017</time>
                            <div class="article_min_text_wrap">
                                <p>Повседневная практика показывает, что сложившаяся структура организации
                                    представляет собой интересный эксперимент проверки систем массового участия. Идейные
                                    соображения
                                    высшего порядка, а также постоянный количественный рост и сфера нашей активности
                                    позволяет
                                    выполнять важные задания по разработке системы обучения кадров, соответствует
                                    насущным
                                    потребностям. Задача организации, в особенности же сложившаяся структура организации
                                    требуют
                                    определения и уточнения новых предложений</p>
                                <div class="article_min_social">
                                    <div class="social_block">
                                        Поделиться
                                        <a href="#">$</a>
                                        <a href="#">$</a>
                                        <a href="#">$</a>
                                    </div>
                                    <a href="#" class="link_news">Читать всю новость <i class="icon-right-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <!--END MORE NEWS-->
    </div>

    <img class="shape_left" src="img/shape-left.png" alt="">
    <img class="shape_right" src="img/shape-right.png" alt="">
</main>
<!--END ABOUT FIRM-->

<!--BEGIN BUTTON UP-->
<div class="block_up">
    <button class="btn_up"><i class="icon-up-open-big"></i></button>
</div>
<!--END BUTTON UP-->
<!--BEGIN CONTACT SECTION-->