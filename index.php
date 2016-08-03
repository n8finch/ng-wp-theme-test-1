<?php

get_header(); ?>
	<div ng-controller="mycontroller">
		<!-- display all post titles in a list -->
<!--		{{postdata}}-->

		<ul ng-repeat="post in postdata">
			<li>{{post.title}}</li>
			<ul>
				<li>{{post.excerpt}}</li>
				<a href="{{post.id}}">Read More...</a>
			</ul>
		</ul>
	</div>
<?php
get_footer();
