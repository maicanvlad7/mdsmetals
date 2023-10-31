<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$blogs = $this->db->get('blogs')->result();

		$seo = $this->generateSeo(
			'Premium Ferroalloys Distributor in Western Europe | MDS Metals',
			'Elevate your industrial standards with MDS Metals, the leading ferroalloys distributor in Western Europe. Offering top-quality products, just-in-time delivery, and competitive pricing. Your success starts with the right materials!'
		);

		$data = array(
			"blogs" => $blogs,
			"seo"   => $seo
		);

		$this->lw('home', $data);
	}

	public function contact()
	{
		$seo = $this->generateSeo(
			'Get in Touch with MDS Metals: Your Premier Ferroalloys Distributor',
			'Reach out to MDS Metals for all your ferroalloy needs. Connect with our expert team today to discuss your specific requirements, get quotes, and find out how our extensive inventory, timely delivery, and quality assurance can benefit your business. Your success in the ferroalloys industry starts with the right partnership!'
		);

		$data = array(
			'seo' => $seo
		);

		$this->lw('contact', $data);
	}

	public function readBlog($articleName)
	{
		$realArticleName = str_replace('_', ' ', $articleName);

		$dbArticle = $this->db->where('title', $realArticleName)->get('blogs')->row();

		/* Just in case article has some name issues or direct link access */
		if(!$dbArticle) redirect('/');

		$seo = $this->generateSeo(
			$dbArticle->title . ' | MDS Metals',
			'Explore insightful articles and industry insights on our blog at MDS Metals. Dive deep into the world of ferroalloys, discover tips and strategies to optimize your operations, and learn how our extensive experience, just-in-time delivery, and premium quality products can make a difference in your business.'
		);

		$data = array(
			"article" => $dbArticle,
			"seo"     => $seo
		);

		$this->lw('readBlog', $data);
	}

	public function productCategory($categoryName)
	{
		$dbCategory = $this->db->where('short', $categoryName)->get('categories')->row();

		if(!$dbCategory) redirect('/');

		$products = $this->db->where('category_id', $dbCategory->id)->get('products')->result();

		$seo = $this->generateSeo(
			$dbCategory->title . ' | MDS Metals',
				 $dbCategory->excerpt
		);

		$data = array(
			"category" => $dbCategory,
			"products" => $products,
			"seo" => $seo
		);

		$this->lw('categoryPage', $data);
	}

	public function viewProduct($id)
	{
		$dbProduct = $this->db->where('id', $id)->get('products')->row();

		if(!$dbProduct) redirect('/');

		$category = $this->db->where('id', $dbProduct->category_id)->get('categories')->row();
		$relProducts = $this->db->where('category_id', $category->id)->get('products')->result();

		$seo = $this->generateSeo(
			$dbProduct->title . ' | MDS Metals',
			'Elevate your industrial standards with MDS Metals, the leading ferroalloys distributor in Western Europe. Offering top-quality products, just-in-time delivery, and competitive pricing. Your success starts with the right materials!'
		);

		$data = array(
			'seo' => $seo,
			'product' => $dbProduct,
			'category' => $category,
			'relProducts' => $relProducts
		);

		$this->lw('viewProduct', $data);
	}

	public function lw($viewName, $data = array())
	{
		$categories = $this->db->get('categories')->result();

		$data['categories'] = $categories;

		$this->load->view('modules/head', $data);
		$this->load->view('pages/'.$viewName, $data);
		$this->load->view('modules/footer');
	}

	public function generateSeo($title, $description)
	{
		$seo = new stdClass();

		$seo->title = $title;
		$seo->description = $description;

		return $seo;
	}


}
