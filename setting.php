<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "wogN7MhPACSoxnRGEtAmZJczP8cBoeMNzfATMNLgg/Ue34y/Yz37qZsXK6RwUKF4ZU0Gd4HKpADBdufXBEJz3Vuq5UWBZdDbluKFvPf/c+D8ve7M5HVT7oRivr4YsRW84WR4bbKehQlKL6sjjY28KgdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "a3ccca8213a6c790c703ad5e15f3848a";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
