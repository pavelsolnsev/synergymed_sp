{% from './data.njk' import tabs as tabs, content as content %}
<section class="course" id="course">
    <div class="container">
        <h2 class="course__title title">Курсы</h2>
        <div class="course__box">
            <ul class="course__list all-tab" id="course-slider">
                {% for item in tabs %}
                <li class="all-tab__item {{item.class | safe}}" data-tab="#{{item.data | safe}}">
                    <h4> {{item.title | safe}} </h4>
                    <span>{{item.text | safe}}</span>
                </li>
                {% endfor %}
            </ul>
            <div class="all-content">
                {% for item in content %}
                <div class="course__content all-content__item {{item.class | safe}}" id="{{item.id | safe}}">
                    <h3 class="course__content-title">{{item.title | safe}} </h3>
                    <ul class="course__content-body">
                        {{item.body | safe}}
                    </ul>
                    <div class="course__content-footer">
                        <p>{{item.text | safe}}</p>
                        <a href="#popup-reg" data-fancybox class="course__content-button button">Оставить заявку</a>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>