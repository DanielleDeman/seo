<?php

namespace Craft;

class SeoVariable
{

	/**
	 * Quickly create a custom SEO variable
	 *
	 * @param string $title
	 * @param string $description
	 * @param bool   $includeTitleSuffix
	 *
	 * @return array
	 */
	public function custom ($title = '', $description = '', $includeTitleSuffix = true)
	{
		return [
			'title' => $title ? $title . ($includeTitleSuffix ? ' ' . craft()->seo->settings()->titleSuffix : '') : '',
			'description' => $description ?: '',
		];
	}

	/**
	 * Get the social media details from the SEO plugin
	 *
	 * @return array
	 */
	public function social ()
	{
		$social = craft()->seo->settings()->social ?: [];

		$twitter = array_key_exists("twitter", $social) ? $social["twitter"] : "";
//		$facebook = array_key_exists("facebook", $social) ? $social["facebook"] : "";

		return [
			"twitter" => $twitter,
			"twitterUrl" => $twitter ? "https://twitter.com/" . $twitter : "",
		];
	}

}