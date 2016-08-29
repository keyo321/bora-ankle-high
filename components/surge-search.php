<div class="surge-hero">
	<div class="left-hero">
		<h1>Surge</h1><span>=</span>
		<h2>B2B Buying Intent</h2>
		<p>
			Surge intent data identifies which of your target companies are
			<strong>'in market'</strong> for your products & services and signals
			when they want to hear from you.
		</p>
	</div>
	<div class="right-hero">
		<!--module wrapper-->
		<div ng-app="topicselect" ng-controller="TopicController as topicSelect" class="surge ng-cloak" ng-show="!topicSelect.loadError">
		  <!--module container-->
		  <div class="cf">
		    <!--topics modules-->
		    <div class="cf selectbox">
		      <!--search topics-->
		      <div class="wrapbox">
		        <div class="wrapbox-fields fnbbdr hasicon">
		          <input type="text" ng-model="search" placeholder="Search Topics" class="fullinpt">
		          <i class="fa fa-search"></i>
		        </div>
		        <ul class="cust-ms left">
		          <li ng-repeat="i in topicSelect.topics | orderBy:'Name' " ng-click="topicSelect.selectTopic(i)" ng-class="{'selected':i.selected}" ng-show="([i] | filter:{Name:search}).length > 0 && !i.selected">{{i.Name}}</li>
		        </ul>
		      </div>
		      <!--selected topics-->
		      <div class="wrapbox">
		        <ul class="cust-ms right">
		          <li ng-repeat="j in topicSelect.selectedTopics" ng-click="topicSelect.removeTopic($index, j)">{{j.Name}}</li>
		        </ul>
		        <a ng-click="topicSelect.runReport()" class="blue-button">Surf the surge</a>
		      </div>
		    </div>
		    <!--loader-->
		    <div class="loader overlayloader"ng-show="topicSelect.showLoader">
		      <div class="mask"></div>
		      <div class="loadimg">
		        <span class="iload"></span>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>

<?php include('search-function-wp.html') ?>
