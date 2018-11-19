@extends('layout')

{{-- {% block link %} --}}
@section('link')
<link rel="stylesheet" href="{% static 'core/css/core_home.css' %}" type="text/css">
@endsection
{{-- {% endblock %}  --}}

{{-- {% block title %} --}}

@section('title')
  Home
@endsection
{{-- <title>Home</title> --}}
{{-- {% endblock %} --}}
@section('body')
<div >
</div>
  <img class="col align-self-center p-0" src="{{asset('img/home_banner.jpg')}}" alt="">
</div>
<h2 class="font-weight-bold text-center text-success mt-5">Stay Connected EveryWhere</h2>
@endsection






<!-- {% block left %}
<div class="left_menu">{% if request.user.is_authenticated %}
    <div class="">
        <a href="{% url 'blog:home' %}" class="left_icon_color">Blog</a>
    </div>
    {% endif %}

</div> {% endblock %}
{% block right %}
<div class="left_menu">{% if request.user.is_authenticated %}
    <div class="">
        <a href="{% url 'core:alluserprofile' %}">Find Friend</a>
    </div>
    <div class="">
        <a href="{% url 'core:profiledetailview' %}">Profile</a>
    </div>
    {% endif %}
</div>
{% endblock %} -->
