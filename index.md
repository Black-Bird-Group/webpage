---
layout: default
title: Home
---

# Welcome to Black Bird Group

This is the home page of my Jekyll website. Feel free to explore and learn more about my projects and interests.

## Latest Blog Posts

{% for post in site.posts %}
- [{{ post.title }}]({{ post.url }}) - {{ post.date | date: "%B %d, %Y" }}
{% endfor %}
