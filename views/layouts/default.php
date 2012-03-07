{% extends "template.php" %}

{% block head %}
    {% include 'common/head.php' %}
{% endblock %}

{% block body %}
	{% block header %}
    	{% include 'common/header.php' %}
	{% endblock %}
	
    <div id="stage" class="{% block stage_class %}{% endblock %}">
    	<div class="inner-left">
    	</div>
    	<div class="inner-right">
    	</div>
		{% block stage %}		
		    <div id="page" class="{% block page_class %}{% endblock %}">
				{% block page %}
		    	{% endblock %}
		    </div>
    	{% endblock %}
    </div>
{% endblock %}
    
{% block foot %}
	{% include 'common/foot.php' %}
{% endblock %}