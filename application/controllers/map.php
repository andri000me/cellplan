<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends CI_Controller {
//Initialize Config Array
    Var $config = array();

    function __construct()
    {
        parent::__construct();
        //Load Google Maps Library
        $this->load->library('googlemaps');
        //Load Map Model
        $this->load->model('map_model');
        
        //Set Config array properties
        $config['apiKey'] = '';
        $config['center'] = '';
        $config['zoom'] = 'auto';
        $config['map_height'] = '920px';
        $config['directions'] = TRUE;
        $config['zoomControlPosition'] = 'BOTTOM_RIGHT';
        $config['zoomControlStyle'] = 'SMALL';
        $config['disableNavigationControl'] = TRUE;
        $config['mapTypeControlPosition'] = 'BOTTOM_LEFT';
        //Initialize GoogleMap and pass Config file
        $this->googlemaps->initialize($config);
    }

    public function index()
    {
        $data['University_Categories'] = $this->map_model->get_categories('University');
        $data['City_Categories'] = $this->map_model->get_categories('City');
        // Create Map and store in data variable
        $data['map'] = $this->googlemaps->create_map();
        //Set main_content to map view
        $data['main_content'] = "map_view";
        //Load Welcome view and pass data
        $this->load->view('includes/template', $data);
    }

    public function all_points()
    {
        //Get co-ordinates from db
        $coords = $this->map_model->get_coordinates();
        
        //Loop through coordinates
        foreach($coords as $coordinate)
        {
            $address_temp = '<table><tr><td>'.$coordinate->Address1.'</td></tr><tr><td>'.$coordinate->City.','.$coordinate->State.' '.$coordinate->Zip.'</td></tr></table>';
            $marker = array();
            $marker['position'] = $coordinate->Lat.','.$coordinate->Long;
            $marker['infowindow_content'] = $coordinate->Name.'<br /><br />'.$coordinate->Address1.'<br />'.$coordinate->City.','.$coordinate->State.' '.$coordinate->Zip;
            $marker['onclick'] = 'detail-card';
            $this->googlemaps->add_marker($marker);
        }
    }
    
    public function lookup()
    {
        $search_value = $this->input->post('search-item', TRUE);
      
        $results = $this->map_model->search($search_value);
        
        if ( $results->num_rows() > 0 )
        {
            foreach ( $results->result() as $result )
            {
                $marker = array();
                $marker['position'] = $result->Lat.','.$result->Long;
                $this->googlemaps->add_marker($marker);
            }
        }
    }

    public function get_directions()
    {
        $lat_long = $this->form->input();
        $origin = $this->form->input();
        
        $dir_config = array();
        
        $dir_config['directionsStart'] = $origin;
        $dir_config['directionsEnd'] = $lat_long;
        $dir_config['directionsDraggable'] = TRUE;
        $dir_config['directionsUnits'] = 'imperial';
        $dir_config['directionsDivID'] = 'direction-list';
        
        $this->googlemaps->initialize($dir_config);
        
        $data['map'] = $this->googlemaps->create_map();
        
        $data['main_content'] = "map_view";
        $this->load->view('includes/template', $data);
    }
}