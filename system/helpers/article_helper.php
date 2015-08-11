<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('article_url'))
{
	function article_url($article)
	{
		$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
		$portal	=['Terpusat', 'Islam', 'Internasional', 'Nasional', 'Teknologi', 'Bola', 'Otomotif', 'Olahraga', 'Kesehatan', 'Gayahidup', 'Hiburan'];
		$type = ['artikel', 'foto', 'video'];
		return $protocol . strtolower($portal[$article->portal_id]) . '.terpusat.com/' . $type[$article->article_type-1] . '/read/' . $article->article_id . '/' . $article->article_slug . '/';
	}
}

if ( ! function_exists('article_img'))
{
	function article_img($article){
		$CI =& get_instance();
		$status = get_headers($CI->config->site_url() . 'galleries/' . $article->article_id . '/' . $article->article_img);
		if(preg_match('/404/i', $status[0]))
			return;
		else
			return $CI->config->site_url() . 'galleries/' . $article->article_id . '/' . $article->article_img;
	}
}

if ( ! function_exists('article_portal'))
{
	function article_portal($article){
		$portal	=['Terpusat', 'Islam', 'Internasional', 'Nasional', 'Teknologi', 'Bola', 'Otomotif', 'Olahraga', 'Kesehatan', 'Gaya Hidup', 'Hiburan'];
		return $portal[$article->portal_id];
	}
}

if ( ! function_exists('article_category'))
{
	function article_category($article){
		$return = '';
		$catId = json_decode($article->category_id);
		$CI =& get_instance();
		$category = $CI->load->model('M_category');
		foreach ($catId as $cat) {
			$return .= ', ' . $category->getCategoryById($cat)->category_name;
		}
		return substr(ltrim(rtrim($return)),1);
	}
}

if ( ! function_exists('article_type'))
{
	function article_type($article)
	{
		$type = ['Artikel', 'Foto', 'Video'];
		return $type[$article->article_type-1];
	}
}

if ( ! function_exists('article_author'))
{
	function article_author($id=null){
		$CI =& get_instance();
		$member = $CI->load->model('M_member');
		if($id != null){
			return $member->getMemberById($id)->fullname;
		}
	}
}

if ( ! function_exists('article_create'))
{
	function article_create($time){
		$new_date = explode(" ", $time);
		$new_date = explode("-", $new_date[0]);
		$new_date = $new_date[2]."/".$new_date[1]."/".$new_date[0];
		return $new_date;
	}
}

if ( ! function_exists('article_time_index'))
{
	function article_time_index($time)
	{
		$time = strtotime($time);
		$time = time() - $time; // to get the time since that moment

		$tokens = array (
			31536000 => 'tahun',
			2592000 => 'bulan',
			604800 => 'minggu',
			86400 => 'hari',
			3600 => 'jam',
			60 => 'menit',
			1 => 'detik'
		);

		foreach ($tokens as $unit => $text) {
			if ($time < $unit) continue;
			$numberOfUnits = floor($time / $unit);
			return $numberOfUnits.' '.$text;
		}

	}
}