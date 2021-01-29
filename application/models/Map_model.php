<?php

class Map_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    function get_coordinates($point_id = NULL)
    {
        $return = array();
        $this->db->select("Lat,Long,Name,Address1,City,State,Zip");
        $this->db->from("Points");
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                array_push($return, $row);
            }
        }

        return $return;
    }

    //Get points in a specific category

    function get_category_points($category_id)
    {
        $return = array();
        //DB Connection
        //$this->db->select('Lat,Long,Name,Address1,City,State,Zip');
        //$this->db->from('Points');
        //$this->db->join('Point2Category','Point2Category.Point_ID = ');
        //$this->db->where('Category_ID='.$category_id);
        //$point_ids = $this-&gt;db-&gt;get();
        if ( $point_ids-&gt;num_rows() &gt; 0 )
        {
            foreach ( $point_ids-&gt;result() as $point )
            {
                $points = get_cordinates($point);
            }

            if ($points-&gt;num_rows() &gt; 0)
            {
                foreach ( $points-&gt;results() as $p )
                {
                    array_push($return, $p);
                }
            }
        }

        return $return;
    }

    //Get Gategories
    function get_categories($cat_type)
    {
        $return = array();
        //DB Connection
        $this-&gt;db-&gt;select('ID,Name');
        $this->db->from('Category');
        $this->db->where('Type', $cat_type);
        $category_items = $this->db->get();
        if ( $category_items->num_rows() > 0)
        {
            foreach ( $category_items->result() as $item )
            {
                $return[$item->ID] = $item->Name;
            }
        }

        return $return;
    }

    function search($term)
    {
        $return = array();
        //DB Connection

        $this->db->select("Lat,Long,Name,Address1,City,State,Zip");
        $this->db->from("Points");
        $this->db->like('Name', $term);
        // $this->db->like('Tags', $term);
        $search_results = $query = $this->db->get();
        if ( $search_results->num_rows() > 0 )
        {
            foreach ( $search_results->result() as $result )
            {
                array_push($return, $result);
            }
        }

        return $return;
    }
}