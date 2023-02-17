{% from './data.njk' import data as expert %}
<section class="expert" id="expert">
    <div class="container">
        <h2 class="expert__title title"><span>Эксперты</span> курса</h2>
        <div class="expert__wrapper">
            <div class="expert__slider">
                {% for item in expert %}
                <div class="expert__item">
                    <div class="expert__box">
                        <div class="expert__img">
                            <img data-src="img/expert/{{item.img | safe}}.jpg" alt="" class="lazy ">
                        </div>
                        <div class="expert__content">
                            <h3>{{item.title | safe}}</h3>
                            <div>{{item.subtitle | safe}}</div>
                            <ul>
                                {{item.desc | safe}}
                            </ul>
                        </div>
                    </div>
                    <ul class="expert__list">
                        {{item.list | safe}}
                    </ul>
                </div>
                {% endfor %}
            </div>
            <div class="expert__arrows"></div>
        </div>
    </div>
</section>