{% from './data.njk' import data as acco %} 
<section class="education" id="education">
    <div class="container">
        <h2 class="education__title title"><span>Как проходит</span> обучение</h2>
        <div class="education__box">
            <ul class="education__box-list">
                <li class="education__box-item">
                    <div class="education__box-item-number">1</div>
                    <div class="education__box-item-content">
                        <h4>Смотрите онлайн уроки</h4>
                        <p>В&nbsp;удобном для вас темпе, задавайте вопросы экспертам на&nbsp;практических занятиях</p>
                    </div>
                </li>
                <li class="education__box-item">
                    <div class="education__box-item-number">2</div>
                    <div class="education__box-item-content">
                        <h4>Сдавайте тесты</h4>
                        <p>9&nbsp;попыток на&nbsp;сдачу оценочных тестов</p>
                    </div>
                </li>
                <li class="education__box-item">
                    <div class="education__box-item-number">3</div>
                    <div class="education__box-item-content">
                        <h4>Практикуйтесь</h4>
                        <p>Отрабатываете новые навыки на&nbsp;практике в&nbsp;вечернее время будней и&nbsp;в&nbsp;выходные</p>
                    </div>
                </li>
                <li class="education__box-item">
                    <div class="education__box-item-number">4</div>
                    <div class="education__box-item-content">
                        <h4>Получайте документы</h4>
                        <p>После сдачи итогового теста</p>
                    </div>
                </li>
            </ul>

            <div class="education__box-img">
                <img data-src="img/education/education.svg" alt="" class="lazy">
            </div>
        </div>
        <div class="education__acco acco">
            <h3 class="acco__title">Практика</h3>
            <ul class="acco__box">
                {% for item in acco %}
                <li class="acco__item">
                    <div class="acco__item-trigger">
                        <div class="acco__item-title"><span>{{item.title | safe}}</span></div>
                    </div>
                    <ul class="acco__content">
                        {{item.content | safe}} 
                    </ul>
                </li>
                {% endfor %}
            </ul>
        </div>
    </div>
</section>