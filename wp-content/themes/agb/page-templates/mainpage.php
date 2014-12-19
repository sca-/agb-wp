<?php
/**
 * Template Name: Главная
 */
get_header(); 
$mainpage = get_the_ID();
?>


<div class="main">
  <div class="container">

  <section class="about">
      <div id="about" class="name"></div>
      <h2><i></i><span>О компании</span></h2>

      <div class="slider">
          <ul class="bxslider">
              <li>
                  <div class="txt"><h4>Заголовок-1</h4>

                      <p>
                          Текст - 1</br>
                          ООО «AGB» интенсивно развивающаяся компания,

                          которая является одной из небольшого количества компаний,

                          предоставляющих продукцию своего производства – светодиодные лампы Т8

                          под цоколь G13.

                          Основным направлением деятельности нашей компании является

                          производство светодиодных ламп Т8. Мы считаем, что совершенства можно

                          добиться только в том случае, когда работаешь в узком сегменте, поэтому мы

                          приложили максимум усилий, чтобы предоставить нашему потребителю

                          лампы Т8 высокого качества, которые способны прослужить долгие годы.
                      </p></div>
                  <img src="images/slide1.png"/>
              </li>
              <li>
                  <div class="txt"><h4>Заголовок-2</h4>

                      <p>
                          Текст - 2</br>
                          Наша компания ООО «AGB» выполняет замкнутый цикл

                          производства, что является гарантов высокого качества:

                          Разработка, производство, продажа, гарантийное обслуживание

                          Обратившись к нам, Вы гарантированно получите:

                          Надежного партнера, реальные цены, опытного поставщика, продукцию высокого качества, профессиональную консультацию, индивидуальный подход

                          Мы стремимся, чтобы сотрудничество с нами для Вас было не только

                          приятным, но и экономически выгодным.
                      </p></div>
                  <img src="images/slide1.png"/>
              </li>
          </ul>
      </div>
      <ul class="icons row-fluid">
          <li class="li1"><i></i><span>Алюминиевый<br/>цоколь G13</span></li>
          <li class="li2"><i></i><span>Экономия<br/>энергии до 90%</span></li>
          <li class="li3"><i></i><span>Долгий срок работы<br/>более 50 000 часов</span></li>
          <li class="li4"><i></i><span>Гарантия<br/>до 2 лет</span></li>
          <li class="li5"><i></i><span>Не нуждается в спец.<br/>утилизации</span></li>
      </ul>
      <div class="arr"></div>
  </section>

  <section class="products">
      <div id="products" class="name"></div>
      <h2><i></i><span>Продукция</span></h2>

      <div class="table-wrap">
          <table class="table text-center table-striped">
              <thead>
              <tr>
                  <th rowspan="2">Лампа Т8</th>
                  <th rowspan="2">Мощность</th>
                  <th rowspan="2">Световой поток</th>
                  <th colspan="2">Цветовая температура</th>
                  <th rowspan="2">Опт от 25 шт.</th>
                  <th rowspan="2">Розница</th>
              </tr>
              <tr>
                  <td>4200К (теплый)</td>
                  <td>6500К (холодный)</td>
              </tr>
              </thead>
              <tbody>

              <?
              // products
              $args = array(
                'post_type'  => 'post'
                );
              $the_query = new WP_Query( $args );

              if( $the_query->have_posts() ){
                while( $the_query->have_posts()){

                  $the_query->the_post();

                  ?>

                  <tr>
                      <td><? the_field('size') ?></td>
                      <td><? the_field('power') ?></td>
                      <td>800 lm</td>
                      <td><img alt="yes" src="<?= get_template_directory_uri() ?>/images/<? if(get_field('warm')) echo('icon-yes'); else echo('icon-no');?>.png"><i class="ico-yes"></i></td>
                      <td><img alt="yes" src="<?= get_template_directory_uri() ?>/images/<? if(get_field('cold')) echo('icon-yes'); else echo('icon-no');?>.png"><i class="ico-yes"></i></td>
                      <td>295 руб.</td>
                      <td>380 руб.</td>
                  </tr>

                  <?

                }
              }
              ?>

              <!-- <tr>
                  <td>600 мм</td>
                  <td>9W</td>
                  <td>800 lm</td>

                  <td><i class="ico-no"><img alt="no" src="images/icon-yes.png"></i></td>
                  <td><img alt="yes" src="images/icon-yes.png"><i class="ico-yes"></i></td>
                  <td>295 руб.</td>
                  <td>380 руб.</td>
              </tr>
              <tr>
                  <td>600 мм</td>
                  <td>9W</td>
                  <td>800 lm</td>
                  <td><img alt="yes" src="images/icon-yes.png"><i class="ico-yes"></i></td>
                  <td><img alt="yes" src="images/icon-yes.png"><i class="ico-yes"></i></td>
                  <td>295 руб.</td>
                  <td>380 руб.</td>
              </tr>
              <tr>
                  <td>1200 мм</td>
                  <td>18W</td>
                  <td>1600 lm</td>
                  <td><i class="ico-no"><img alt="no" src="images/icon-yes.png"></i></td>
                  <td><img alt="yes" src="images/icon-yes.png"><i class="ico-yes"></i></td>
                  <td>395 руб.</td>
                  <td>480 руб.</td>
              </tr>
              <tr>
                  <td>1200 мм</td>
                  <td>18W</td>
                  <td>1600 lm</td>
                  <td><img alt="yes" src="images/icon-yes.png"><i class="ico-yes"></i></td>
                  <td><img alt="yes" src="images/icon-yes.png"><i class="ico-yes"></i></td>
                  <td>395 руб.</td>
                  <td>480 руб.</td>
              </tr> -->
              </tbody>
          </table>
      </div>

      <div class="arr"></div>
  </section>

  <?
    // Fests
    $args = array(
      'post_type'  => 'post',
      'meta_query' => array(
        array(
          'key'   => 'featured',
          'value' => '1'
          )
        )
      );
    $the_query = new WP_Query( $args );

    if( $the_query->have_posts() ){
      while( $the_query->have_posts()){

        $the_query->the_post();

        include(locate_template('page-templates/product-feat.php'));

      }
    }
    ?>

  
  <section class="size size-600">
      <div id="size-600" class="name"></div>
      <h3 class="text-uppercase">Размер светодиодной лампы т8 — <span class="green">600мм</span></h3>

      <div class="table-wrap">
          <table class="table text-center table-striped">
              <thead>
              <tr>
                  <th>Продукция</th>
                  <th>Технические характеристики</th>
                  <th>Цена опт. (руб.)</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td class="img">

                  </td>
                  <td>
                      <table class="table  text-left table-striped">
                          <tbody>
                          <tr>
                              <td>Мощность:</td>
                              <td>9W</td>
                          </tr>
                          <tr>
                              <td>Рабочее напряжение:</td>
                              <td>85-265V</td>
                          </tr>
                          <tr>
                              <td>Световой поток:</td>
                              <td>800lm</td>
                          </tr>
                          <tr>
                              <td>Цветовая температура:</td>
                              <td>4200К&nbsp;&nbsp;&nbsp;6500К</td>
                          </tr>
                          <tr>
                              <td> Цвет свечения:</td>
                              <td><span class="yellow">Нейтральный</span>&nbsp;&nbsp;Белый
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  Индекс цветопередачи:
                              </td>
                              <td>≥ 70</td>
                          </tr>
                          <tr>
                              <td> Кол-во светодиодов:
                              </td>
                              <td>48</td>
                          </tr>
                          <tr>
                              <td>Коэффициент мощности:                             </td>
                              <td>≥ 0.95</td>
                          </tr>
                          <tr>
                              <td>Угол освещения:
                              </td>
                              <td>330°</td>
                          </tr>
                          <tr>
                              <td>Рассеиватель:                             </td>
                              <td>Стекло с ударопрочным покрытием и инфрокрасной защитной пленкой</td>
                          </tr>
                          <tr>
                              <td>Размер:</td>
                              <td>610*26мм</td>
                          </tr>


                          </tbody>
                      </table>

                  </td>
                  <td>
                      <p>                         Розница&nbsp;-&nbsp;380&nbsp;руб.<br>                         Опт - 295 руб.<br><br>
                          <a href="#">Звоните!</a> <br>
                          Мы подготовили для вас<br>специальное предложение
                      </p>
                  </td>
              </tr>
              </tbody>
          </table>


      </div>

      <div class="arr"></div>
  </section>


  <section class="size size-1200">
      <div id="size-1200" class="name"></div>
      <h3 class="text-uppercase">Размер светодиодной лампы т8 — <span class="green">1200мм</span></h3>

      <div class="table-wrap text-center table-striped">
          <table class="table">
              <thead>
              <tr>
                  <th>Продукция</th>
                  <th>Технические характеристики</th>
                  <th>Цена опт. (руб.)</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td class="img">

                  </td>
                  <td>

                      <table class="table  text-left table-striped">
                          <tbody>
                          <tr>
                              <td>Мощность:</td>
                              <td>18W</td>
                          </tr>
                          <tr>
                              <td>Рабочее напряжение:</td>
                              <td>85-265V</td>
                          </tr>
                          <tr>
                              <td>Световой поток:</td>
                              <td>1600lm</td>
                          </tr>
                          <tr>
                              <td>Цветовая температура:</td>
                              <td>4200К&nbsp;&nbsp;&nbsp;6500К</td>
                          </tr>
                          <tr>
                              <td> Цвет свечения:</td>
                              <td><span class="yellow">Нейтральный</span>&nbsp;&nbsp;Белый
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  Индекс цветопередачи:
                              </td>
                              <td>≥ 70</td>
                          </tr>
                          <tr>
                              <td> Кол-во светодиодов:
                              </td>
                              <td>96</td>
                          </tr>
                          <tr>
                              <td>Коэффициент мощности:                             </td>
                              <td>≥ 0.95</td>
                          </tr>
                          <tr>
                              <td>Угол освещения:
                              </td>
                              <td>330°</td>
                          </tr>
                          <tr>
                              <td>Рассеиватель:                             </td>
                              <td>Стекло с ударопрочным покрытием и инфрокрасной защитной пленкой</td>
                          </tr>
                          <tr>
                              <td>Размер:</td>
                              <td>1220*26мм</td>
                          </tr>


                          </tbody>
                      </table>

                  </td>
                  <td>
                      <p>
                          Розница - 480 руб.<br/>
                          Опт - 395 руб.<br/><br/>
                          <a href="#">Звоните!</a> <br/>
                          Мы подготовили для вас<br/>специальное предложение
                      </p>
                  </td>
              </tr>
              </tbody>
          </table>


      </div>

      <div class="arr"></div>
  </section>


  <section class="calc">
      <div id="calc" class="name"></div>
      <h2><i></i><span><? the_field('calc', $mainpage) ?></span></h2>

      <p>Расчет экономической эффективности применения светодиодных ламп серии AGB-Т8 -1200 мм из расчета установки 300
          ламп
          на 5 лет.</p>

      <div class="table-wrap">
          <table class="table table-striped">

              <tbody>
              <tr>
                  <td width="50%"></td>
                  <td width="30%">Люминесцентная<br/>
                      лампа Т8, цоколь<br/>
                      G13, 120 см, 40W
                  </td>
                  <td width="20%"><span class="green">Светодиодная лампа<br/>
                  AGB-Т8, цоколь<br/>
                  G13, 120 см, 18W</span></td>
              </tr>
              <tr>
                  <td>Потребляемая мощность светильника</td>
                  <td>40 Вт</td>
                  <td>18 Вт</td>
              </tr>
              <tr>
                  <td>Стоимость кВт.ч электроэнергии</td>
                  <td colspan="2" class="text-center">5,02 руб.</td>
              </tr>
              <tr>
                  <td>Среднегодовой рост тарифов</td>
                  <td colspan="2" class="text-center">15%</td>
              </tr>
              <tr>
                  <td>Дней в году</td>
                  <td colspan="2" class="text-center">365 дней</td>
              </tr>
              <tr>
                  <td>Среднесуточное время работы</td>
                  <td colspan="2" class="text-center">14 ч.</td>
              </tr>
              <tr>
                  <td>Потребление электроэнергии в год</td>
                  <td>61 320 кВт.ч</td>
                  <td>27 594 кВт.ч</td>
              </tr>
              <tr>
                  <td>Расходы за 1-й год эксплуатации (электроэнергия), руб.</td>
                  <td>307 826 руб.</td>
                  <td>138 522 руб.</td>
              </tr>
              <tr>
                  <td>Расходы за 2-й год на электроэнергию,с учетом повышения тарифов</td>
                  <td>354 000 руб.</td>
                  <td>159 300 руб.</td>
              </tr>
              <tr>
                  <td>Расходы за 3-й год на электроэнергию, с учетом повышения тарифов</td>
                  <td>407 100 руб.</td>
                  <td>183 195 руб.m</td>
              </tr>
              <tr>
                  <td>Расходы за 4-й год на электроэнергию, с учетом повышения тарифов</td>
                  <td>468 165 руб.</td>
                  <td>210 674 руб.</td>
              </tr>
              <tr>
                  <td>Расходы за 5-й год на электроэнергию, с учетом повышения тарифов</td>
                  <td>538 390 руб.</td>
                  <td>242 276 руб.</td>
              </tr>
              <tr>
                  <td>Затраты за 5 лет</td>
                  <td>2 075 483 руб.</td>
                  <td>933 967 руб.</td>
              </tr>
              <tr>
                  <td>Доход за 5 лет</td>
                  <td colspan="2" class="text-center"><span class="green"> + 1 141 516 руб.</span></td>
              </tr>

              </tbody>
          </table>
      </div>
      <p class="red comment">*Без учета стоимости светильников и среднегодовых затрат на обслуживание.</p>

      <div class="arr"></div>
  </section>


  <section class="ship">
      <div id="ship" class="name"></div>
      <h2><i></i><span>Доставка</span></h2>

      <p>Доставка по г. Москва в пределах МКАД <br>
          - 300 руб. (1 - 6 кг.) <br>
          - 400 руб (6 - 10 кг.) <br>
          <br>
          Заказы свыше 25 000 руб. &mdash; <strong>Доставка бесплатно</strong><br><br>          Доставка в Московскую область<br> - 300 руб.(1 - 6 кг.) + 20 руб. за каждый км от МКАД<br>
          - 400 руб (6 - 10 кг.) <br>
          <br>


          Заказы свыше 50 000 руб. &mdash; <strong>Доставка бесплатно</strong><br><br>          Доставка до Вашей транспортной компании (бесплатно от 50000 руб.) 1000 руб.<br><br>
          Самовывоз:  130 руб., место самовывоза уточняйте у менеджера<br>&nbsp;

      </p>


      <div class="arr"></div>
  </section>

  <section class="section-bottom">
      <div id="contacts" class="name"></div>
      <h2 class="text-uppercase">ЕСТЬ ВОПРОСЫ? ЗВОНИТЕ: <span class="green">+7(495)777-7777</span></h2>

      <p class="text-center">Или закажите <a href="#">Бесплатный обратный
          звонок</a></p>
  </section>


  </div>
</div>


<? get_footer();
