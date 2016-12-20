<!-- popup -->
	<div id="form-popup" style="display:none;">
        <form class="popup-form" action="#">
            <span class="form-title"></span>
            <input type="text" class="form-control name" name="name" placeholder="Ваше имя" value="Ваше имя" onblur="if(this.value=='') this.value=$(this).attr('placeholder')" onfocus="if(this.value==$(this).attr('placeholder')) this.value='';" />
            <input data-req="1" type="text" class="form-control phone" name="phone" placeholder="Ваш телефон" value="Ваш телефон" onblur="if(this.value=='') this.value=$(this).attr('placeholder')" onfocus="if(this.value==$(this).attr('placeholder')) this.value='';" />
            <textarea class="form-control text" name="text" placeholder="Ваш комментарий" value="Ваш комментарий" onblur="if($(this).html()=='') $(this).html($(this).attr('placeholder'))" onfocus="if($(this).html()==$(this).attr('placeholder')) $(this).html('');" >Ваш комментарий</textarea>
            <button class="btn btn-default btn-doStuff send-x-data"
                    data-script-name="<?php echo $ajaxScriptPath?>" ></button>
        </form>
    </div>
    <a id="form-popup-opener" href="#form-popup" class="fb" style="display:none;"></a>

<!-- popup -->
    <div class="popup-service-info" id="form-popup-s1" style="display:none;">
        
        <div class="ftitle">Очистка канализационных сетей <br>
            и устранение засоров
            <div class="wrp-close-btn">
                <a href="javascript:void(0);" class="close-btn"></a>
            </div>
        </div>

        <div class="wrp-fbody">
            <div class="wrp-b1 bb-grey">
                <div class="wrp-img">
                    <img src="/img/pps1.jpg">
                </div>

                <div class="wrp-text">
                    <p>Гидродинамическая промывка является, пожалуй, основным методом прочистки, с целью профилактики засоров и в полной мере освобождает трубы от отложений, восстанавливая первоначальное сечение трубы.</p>
                    <p>Принцип такой очистки прост: мощные струи воды под высоким давлением создают гидродинамическую ударную нагрузку на конкретный очищаемый участок, при этом давление в самом трубопроводе не создается. Отделенные отложения выводятся в нижний канализационный колодец и удаляются.</p>
                    <p>В дальнейшем производится промывка с применением химических реагентов для дезинфекции участка трубопровода.</p>
                    <p>Эти методы позволяют качественно очистить трубопровод без повреждений и расстыковок.</p>
                </div>
            </div>

            <div class="subtitle">УСЛУГИ ПО ПРОЧИСТКЕ КАНАЛИЗАЦИИ</div>

            <div class="box-blue">
                <ul>

                    <li>
                        <div class="wrp-text">
                            <div class="text">Прочистка канализации</div>
                            <div class="price">от 200 руб/пог.м</div>
                        </div>
                    </li>
                    <li>
                        <div class="wrp-text">
                            <div class="text">Прочистка канализации в частном доме</div>
                            <div class="price">от 200 руб/пог.м</div>
                        </div>
                    </li>
                    <li>
                        <div class="wrp-text">
                            <div class="text">Прочистка канализации на предприятиях</div>
                            <div class="price">от 250 руб/пог.м</div>
                        </div>
                    </li>
                    <li>
                        <div class="wrp-text">
                            <div class="text">Механическая прочистка канализации</div>
                            <div class="price">от 200 руб/пог.м</div>
                        </div>
                    </li>
                    <li>
                        <div class="wrp-text">
                            <div class="text">Прочистка канализации в кафе и ресторанах</div>
                            <div class="price">от 200 руб/пог.м</div>
                        </div>
                    </li>
                    <li>
                        <div class="wrp-text">
                            <div class="text">Очистка канализации</div>
                            <div class="price">от 200 руб/пог.м</div>
                        </div>
                    </li>
                    <li>
                        <div class="wrp-text">
                            <div class="text">Прочистка канализационных труб в квартире</div>
                            <div class="price">от 2500 руб/пог.м</div>
                        </div>
                    </li>
                    <li>
                        <div class="wrp-text">
                            <div class="text">Устранение засора в канализационных трубах</div>
                            <div class="price">от 250 руб/пог.м</div>
                        </div>
                    </li>
                    <li>
                        <div class="wrp-text">
                            <div class="text">Прочистка канализационных труб</div>
                            <div class="price">от 200 руб/пог.м</div>
                        </div>
                    </li>
                    <li>
                        <div class="wrp-text">
                            <div class="text">Устранение засора унитаза</div>
                            <div class="price">от 1000 руб/пог.м</div>
                        </div>
                    </li>
                    <li>
                        <div class="wrp-text">
                            <div class="text">Прочистка канализационного стояка</div>
                            <div class="price">от 200 руб/пог.м</div>
                        </div>
                    </li>
                    <li>
                        <div class="wrp-text">
                            <div class="text">Устранение засоров</div>
                            <div class="price">от 2500 руб/пог.м</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="line-footer">
            <a data-push-event="getService_4" href="javascript:void(0);" class="btn-white-border actionOpenFormService">Заказать услугу</a>
        </div>
    </div>
    <a id="form-popup-s1-opener" href="#form-popup-s1" class="fb" style="display:none;"></a>


    <div class="popup-service-info" id="form-popup-s2" style="display:none;">
        
        <div class="ftitle ">Монтаж отопления водопровода канализации
            <div class="wrp-close-btn">
                <a href="javascript:void(0);" class="close-btn"></a>
            </div>
        </div>

        <div class="wrp-fbody">
            <div class="wrp-b1 bb-grey">
                <div class="wrp-img">
                    <img src="/img/pps2.jpg">
                </div>

                <div class="wrp-text">
                    <p>Грамотная установка и обслуживание отопительной системы – залог ее долгой и качественной работы. Для того, чтобы отопительная система не создавала проблем в дальнейшем, нужно учесть все нюансы еще на этапе ее проектирования и монтажа. Доверьте эти работы грамотным специалистам!</p>
                    <p>Наши специалисты всегда готовы оказать консультативную поддержку, а также провести весь комплекс работ по проектированию, монтажу и автоматизации систем отопления.</p>
                </div>
            </div>

            <div class="subtitle">Услуги по монтажу отопления водопровода канализации</div>

            <div class="box-blue w400">
                <ul>

                    <li>
                        Монтаж теплых полов, батарей
                    </li>
                    <li>
                        Монтаж водопровода, подкачивающих и<br>
                        глубинных насосов
                    </li>
                    <li>
                        Установка сантехники
                    </li>
                    <li>
                        Установка котлов, бойлеров (электрических<br>
                        и косвенного нагрева)
                    </li>
                    <li>
                        Установка водоподготовки, фильтров отчистки<br>
                        воды, обезжелезивания и др.
                    </li>
                    <li>
                        Отопление под ключ
                    </li>
                    <li>
                        Монтаж канализации
                    </li>
                </ul>
            </div>
        </div>

        <div class="line-footer">
            <a data-push-event="getRaschet_1" href="javascript:void(0);" class="btn-white-border actionOpenFormRaschet">Получить расчет</a>
        </div>
    </div>
    <a id="form-popup-s2-opener" href="#form-popup-s2" class="fb" style="display:none;"></a>


    <div class="popup-service-info" id="form-popup-s3" style="display:none;">
        
        <div class="ftitle">аВТОНОМНАЯ СИСТЕМА ОЧИСТКИ<br>
            КАНАЛИЗАЦИОННЫХ СТОКОВ
            <div class="wrp-close-btn">
                <a href="javascript:void(0);" class="close-btn"></a>
            </div>
        </div>

        <div class="wrp-fbody">
            <div class="wrp-b1 bb-grey">
                <div class="wrp-img">
                    <img src="/img/pps3.jpg">
                </div>

                <div class="wrp-text">
                    <div class="title-blue">МЫ ЯВЛЯЕМСЯ ДИЛЛЕРАМИ </div>
                    <p>Локальные установки очистки сточных вод могут успешно заменить централизованную канализацию, если они правильно спроектированы, а их мощность и технические характеристики соответствуют условиям эксплуатации. Мы производим монтаж как индивидуальных очистных сооружений так и специализированных –для предприятий пищевой промышленности, автозаправок, и других производственных предприятий.</p>
                    <p>Хорошая канализация для загородного дома должна выполнять свои функции независимо от условий работы и степени нагрузки. Системы, предлагаемые нами, являются готовыми локальными очистными сооружениями, чья работа основана на биологическом окислении загрязнений. Роль окислителя выполняет активный ил (взвесь из аэробной биомассы), который в присутствии кислорода способен доводить эффективность очистки до 98%.</p>
                </div>
            </div>

            <div class="subtitle-blue">Услуги по монтажу автономной системы очистки</div>

            <div class="box-blue">
                <ul>
                    <li>
                        Подбор оборудования на объекте (выезд специалиста)
                    </li>
                    <li>
                        Бесплатный выезд мастера на объет
                        <div class="subtext">
                            Вы получите подробную консультацию по вариантам канализования Вашего
                            участка с учетом индивидуальных условий. Инженер компании подберет
                            оптимальный вариант оборудования по типу, производительности и цене,
                            подходящий именно Вам. Посоветует, где разместить очистное сооружение, как
                            его смонтировать, каким способом осуществить водоотведение и расскажет все
                            подробности об эксплуатации.
                        </div>

                    </li>
                    <li>
                        Проектирование и согласование  сметы
                    </li>
                </ul>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="subtitle-blue">Монтаж очистных сооружений</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="subsubtitle nomargin">Монтаж очистного сооружения для частного домовладения включает в себя:</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li>поставка на участок оборудования и материалов для  устройства системы канализации;</li>
                        <li>подготовка котлована;</li>
                        <li>прокладка подводящего/отводящего трубопровода;</li>
                        <li>спуск очистного сооружения в котлован;</li>
                        <li>присоединение подводящего/отводящего трубопровода к очистной станции;</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>прокладка и подключение электрических коммуникаций;</li>
                        <li>одновременная обсыпка и залив станции водой;</li>
                        <li>монтаж и подключение дополнительного и электрооборудования;</li>
                        <li>запуск установки и проверка работоспособности.</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="subsubtitle ">Мы работаем с системами автономной
                        канализации</div>
                    <div class="wrp-img2"><img src="/img/avtokanaliz1.png"></div>
                    <div class="box-blue w100pr">
                        <div class="subsubtitle nomargin">Автономные канализации юнилос
                            характеризуются:</div>
                        <ul>
                            <li>Высокая степень очистки стоков</li>
                            <li>Станции работают автономно. Режимы работы регулируются автоматически в соответствии с объемом поступающих стоков</li>
                            <li>Обслуживание станции легко производит сам пользователь</li>
                            <li>Отсутствие дурных запахов</li>
                            <li>Оптимальные габаритные размеры станции</li>
                            <li>Экологическая безопасность</li>
                            <li>Доступная цена.</li>
                            <li>Сервисное обслуживание не чаще 1-2 раз в год</li>
                            <li>Экономия электроэнергии</li>
                            <li>Отсутствие шума и запаха при работе.</li>
                        </ul>
                    </div>

                    <div class="subsubtitle">Мы работаем с системами автономной
                        канализации</div>
                    <div class="wrp-img2"><img src="/img/avtokanaliz3.png"></div>
                    <div class="text">
                        Модельный ряд автономных канализаций для загородного дома «Deka» и «BioDeka» позволит подобрать установку под именно ваши потребности:
                    </div>
                    <div class="box-blue w100pr">
                        <ul>
                            <li>Автономная канализация для загородного дома и дачи «Deka» и «BioDeka» способна переработать все виды сточных вод: от туалета, кухни, ванной, а также от стиральных и посудомоечных машин.</li>
                            <li>Система утилизации очищенной воды универсальна, что обеспечивает работу в любой ситуации.</li>
                            <li>Простота отвода очищенной воды. Нет необходимости в обустройстве полей фильтрации</li>
                        </ul>
                    </div>

                    <div class="text">
                        Эти системы локальной очистки сточных вод экономичны и экологичны:
                    </div>
                    <div class="box-blue w100pr">
                        <ul>
                            <li>Потребляет всего 0,045 КВт/ч электроэнергии</li>
                            <li>Монтаж можно осуществить на участке площадью всего 0,75 кв. метра</li>
                            <li>Они комфортны и не создают неприятных запахов</li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="subsubtitle">Мы работаем с системами автономной
                        канализации</div>
                    <div class="wrp-img2"><img src="/img/avtokanaliz2.png"></div>
                    <div class="text">
                        Основное назначение ТОПАС установок – очистка бытовых стоков, с чем они эффективно справляются за счёт инновационных технологических решений. Конструктивно они представляют собой ёмкости их полипропилена, поделённых на нескольких рабочих камер. В одной установке происходит очистка стоков от механических примесей и разложение оставшихся загрязнений активным илом. Это позволило уменьшить размеры самих УОСВ и упростить их монтаж по месту эксплуатации, минимизировав количество земляных работ.
                    </div>
                    <div class="box-blue w100pr">
                        <div class="subsubtitle nomargin">Автономные канализации ТОПАС
                            характеризуются:</div>
                        <ul>
                            <li>Высокая степень очистки стоков</li>
                            <li>Не потребуют регулярных трат на услуги ассенизаторов, как это бывает с септиками и выгребными ямами</li>
                            <li>Отсутствие неприятного запаха в процессе эксплуатации </li>
                            <li>Отказ от покупки бактерий</li>
                            <li>Цена обслуживания значительно ниже, чем для любого другого способа переработки отходов</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="line-grey">
            <span style="color:#ff0000;">Стоимость монтажа, материалов и комплектующих</span> определяется после<br>
             составления сметы на БЕСПЛАТНОМ выезде нашего специалиста на место<br>
              монтажа.
        </div>

        <div class="line-footer">
            <a data-push-event="getRaschet_2" href="javascript:void(0);" class="btn-white-border actionOpenFormRaschet">Получить расчет</a>
        </div>
    </div>
    <a id="form-popup-s3-opener" href="#form-popup-s3" class="fb" style="display:none;"></a>


    <div class="popup-service-info" id="form-popup-s4" style="display:none;">
        
        <div class="ftitle">ОЧИСТКА ОТоПЛЕНИЯ, ПРОМЫШЛЕННЫХ<br>
            И БЫТОВЫХ КОТЛОВ
            <div class="wrp-close-btn">
                <a href="javascript:void(0);" class="close-btn"></a>
            </div>
        </div>

        <div class="wrp-fbody">
            <div class="wrp-b1">
                <div class="wrp-img">
                    <img src="/img/pps4.jpg">
                </div>

                <div class="wrp-text">
                    <p>Компания “Комсервис-Юг 69” оказывает услуги по промывке и опрессовке систем отопления и водоснабжения. Мы занимаемся обслуживанием инженерных сетей различного назначения и сложности, работаем на любых объектах: в частных домах и многоэтажках, на промышленных предприятиях, в административных и общественных зданиях.</p>
                    <p>Чтобы системы отопления и водоснабжения сохраняли свою эффективность и работоспособность максимально долго, их требуется периодически промывать, удаляя мусор и накопившиеся загрязнения.</p>
                </div>
            </div>

            <div class="subtitle-blue">Технология работы</div>

            <div class="list-blue-line">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item">
                            <div class="num">1</div>
                            <div class="text">ОБСЛЕДОВАНИЕ СИСТЕМЫ (СТЕПЕНЬ ЗАБИТОСТИ СИСТЕМЫ ОТЛОЖЕНИЯМИ, ХАРАКТЕР ДАННЫХ ОТЛОЖЕНИЙ – ХИМИЧЕСКИЙ АНАЛИЗ)</div>
                        </div>
                        <div class="item">
                            <div class="num">2</div>
                            <div class="text">ПОДБОР ТЕХНОЛОГИИ ПРОМЫВКИ, СОСТАВА ХИМИЧЕСКИХ РЕАГЕНТОВ И КОНЦЕНТРАЦИИ РАСТВОРА</div>
                        </div>
                        <div class="item">
                            <div class="num">3</div>
                            <div class="text">ВРЕЗКА НАСОСНОГО И ЕМКОСТНОГО ОБОРУДОВАНИЯ В ДЕЙСТВУЮЩУЮ СИСТЕМУ И ДОБАВЛЕНИЕ РАСТВОРА В ТЕПЛОНОСИТЕЛЬ</div>
                        </div>
                        <div class="item">
                            <div class="num">4</div>
                            <div class="text">ПРИНУДИТЕЛЬНАЯ ЦИРКУЛЯЦИЯ В СИСТЕМЕ РАСТВОРА В ТЕЧЕНИЕ НОРМАТИВНОГО ВРЕМЕНИ</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="item">
                            <div class="num">5</div>
                            <div class="text">НЕЙТРАЛИЗАЦИЯ – УДАЛЕНИЕ ИЗБЫТКОВ ХИМИЧЕСКИ АКТИВНОГО ВЕЩЕСТВА ИЗ РАСТВОРА И ПАССИВАЦИЯ – ПРЕДОТВРАЩЕНИЕ ДАЛЬНЕЙШЕЙ КОРРОЗИИ НА ВНУТРЕННИХ ПОВЕРХНОСТЯХ СИСТЕМЫ</div>
                        </div>

                        <div class="item">
                            <div class="num">6</div>
                            <div class="text">ПРОДУВКА ВОЗДУХОМ И ПРОМЫВКА СИСТЕМЫ ОТ РАСТВОРА И ОТЛОЖЕНИЙ</div>
                        </div>
                    </div>

                </div>
                
            </div>

            

        </div>

        <div class="bg-plumbs">
            <div class="row">
                <div class="col-md-5">
                    <div class="title">Мы сделаем для вас:</div>
                </div>
                <div class="col-md-7">
                    <ul>
                        <li>Промывка и прочистка систем отопления и водяных теплых полов;</li>
                        <li>Гидропневматическая промывка системы отопления;</li>
                        <li>Очищение отопительного котла от кальциевых наслоений;</li>
                        <li>Промывка труб холодного и горячего водоснабжения;</li>
                        <li>Выдача документов о выполненных работах.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="line-footer">
            <a data-push-event="getService_5" href="javascript:void(0);" class="btn-white-border actionOpenFormService">Заказать услугу</a>
        </div>
    </div>
    <a id="form-popup-s4-opener" href="#form-popup-s4" class="fb" style="display:none;"></a>