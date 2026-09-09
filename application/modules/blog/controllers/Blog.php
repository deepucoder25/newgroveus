<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(['text', 'url']);
    }

    private function slugify($text) {
        $text = strtolower(trim($text));
        $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
        $text = preg_replace('/[\s-]+/', '-', $text);
        return trim($text, '-');
    }

    function index() {
        redirect('blog/view');
    }

    function view(){
        $this->load->library('pagination');

        // Fetch dynamic blogs from database (Admin Panel table: blog)
        $this->db->order_by('b_id', 'DESC');
        $query = $this->db->get('blog');
        $all_blogs = ($query && $query->num_rows() > 0) ? $query->result() : [];

        $total_rows = count($all_blogs);
        $per_page = 6;
        $offset = (int) $this->uri->segment(3);

        $config['base_url'] = site_url('blog/view');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="styled-pagination clearfix text-center">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="active rc_first_hr color_dark">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'First';

        $this->pagination->initialize($config);

        $data['blogs'] = array_slice($all_blogs, $offset, $per_page);
        $data['total'] = $total_rows;
        $data['recent_posts'] = array_slice($all_blogs, 0, 5);

        $data['title'] = "Official Blog | " . (!empty($this->comp['company3']) ? $this->comp['company3'] : 'Groveus Informatics');
        $data['description'] = "Discover the latest insights, technology trends, software development best practices, and search engine optimization guides from " . (!empty($this->comp['company3']) ? $this->comp['company3'] : 'Groveus Informatics') . ".";
        $data['module'] = "blog";
        $data['view_file'] = "blog"; 

        echo Modules::run('template/layout2', $data);
    }

    function read($slug = '') {
        $search_slug = str_replace('_', '-', trim($slug));

        $this->db->order_by('b_id', 'DESC');
        $query = $this->db->get('blog');
        $all_blogs = ($query && $query->num_rows() > 0) ? $query->result() : [];

        $selected_blog = null;
        if (!empty($all_blogs)) {
            foreach ($all_blogs as $b) {
                $custom_slug = !empty($b->slug) ? $b->slug : '';
                $auto_slug = $this->slugify($b->title);
                $b_id = isset($b->b_id) ? (string)$b->b_id : (isset($b->id) ? (string)$b->id : '');

                if (
                    (!empty($custom_slug) && strtolower($custom_slug) === strtolower($search_slug)) || 
                    (strtolower($auto_slug) === strtolower($search_slug)) ||
                    ($b_id === $search_slug)
                ) {
                    $selected_blog = $b;
                    break;
                }
            }
        }

        if ($selected_blog) {
            // Increment view count
            if (isset($selected_blog->b_id)) {
                $this->db->where('b_id', $selected_blog->b_id);
                $this->db->set('views', 'views+1', FALSE);
                $this->db->update('blog');
            }

            $data['query'] = [$selected_blog];
            $data['recent_posts'] = array_slice($all_blogs, 0, 5);
            
            $data['title'] = !empty($selected_blog->meta_title) ? $selected_blog->meta_title : ucfirst($selected_blog->title);
            $data['description'] = !empty($selected_blog->meta_desc) ? $selected_blog->meta_desc : word_limiter(strip_tags($selected_blog->description), 200);
            
            // Image resolution for header & social graph
            $image_file = $selected_blog->image ?? '';
            if (!empty($image_file) && substr($image_file, 0, 4) === 'http') {
                $data['img'] = $image_file;
            } elseif (!empty($image_file) && file_exists(FCPATH . 'assets/uploads/blog/' . $image_file)) {
                $data['img'] = base_url('assets/uploads/blog/' . $image_file);
            } elseif (!empty($image_file) && file_exists(FCPATH . 'uploads/blogs/' . $image_file)) {
                $data['img'] = base_url('uploads/blogs/' . $image_file);
            } else {
                $data['img'] = base_url('assets/images/about/about-showcase.webp');
            }
            
            $data['module'] = "blog";
            $data['view_file'] = "view"; 

            echo Modules::run('template/layout2', $data);
        } else {
            show_404();
        }
    }
}
