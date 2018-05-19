<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Q1_model');
       
    }

    public function index() {
        $data['page'] = 'q1';
        $data['metals'] = $this->Q1_model->getMetal();
        $data['coatings'] = $this->Q1_model->getCoating();
//        print_r($data);exit;
        $this->load->view('page', $data);
    }
    public function q2() {
        $data['page'] = 'q2';
        $this->load->view('page', $data);
    }
    

    public function getCost() {
        $post = $this->input->post();
        $response = array();
        $totalCost = NULL;
        try {
            if (!isset($post['trophyShape']) && $post['trophyShape'] == '')
                throw new Exception('Please select trophy shape');

            if (!isset($post['metalType']) && $post['metalType'] == '')
                throw new Exception('Please select metal type');

            if (!isset($post['coating']) && $post['coating'] == '')
                throw new Exception('Please select coating');
            switch ($post['trophyShape']) {
                case 'Sphere':
                    if (!isset($post['sphereRadius']) && !is_Numeric($post['sphereRadius']))
                        throw new Exception('Please enter correct sphere radius');
                    $surfaceArea = 4 * 3.14 * $post['sphereRadius'] * $post['sphereRadius'];
                    $metal = $this->Q1_model->getMetal(array('id' => $post['metalType']));
                    $coating = $this->Q1_model->getCoating(array('id' => $post['coating']));
                    $totalCost = $this->getTotalCost($surfaceArea, $metal[0]['metal_cost'], $coating[0]['coating_price'], $post);

                    break;
                case 'Cylinder':
                    if (!isset($post['cylinderRadius']) && !is_Numeric($post['cylinderRadius']))
                        throw new Exception('Please enter correct cylinder radius');
                    if (!isset($post['cylinderHeight']) && !is_Numeric($post['cylinderHeight']))
                        throw new Exception('Please enter correct cylinder height');
                    $surfaceArea = (2 * 3.14 * $post['cylinderRadius'] * $post['cylinderHeight']) + (2 * 3.14 * $post['cylinderRadius'] * $post['cylinderRadius']);
                    $metal = $this->Q1_model->getMetal(array('id' => $post['metalType']));
                    $coating = $this->Q1_model->getCoating(array('id' => $post['coating']));
                    $totalCost = $this->getTotalCost($surfaceArea, $metal[0]['metal_cost'], $coating[0]['coating_price'], $post);

                    break;
                case 'Cube':
                    if (!isset($post['cubeLength']) && !is_Numeric($post['cubeLength']))
                        throw new Exception('Please enter correct cube length');
                    $surfaceArea = 6 * $post['cubeLength'] * $post['cubeLength'];
                    $metal = $this->Q1_model->getMetal(array('id' => $post['metalType']));
                    $coating = $this->Q1_model->getCoating(array('id' => $post['coating']));
                    $totalCost = $this->getTotalCost($surfaceArea, $metal[0]['metal_cost'], $coating[0]['coating_price'], $post);

                    break;

                default:
                    break;
            }
            $response['success'] = true;
            $response['cost'] = $totalCost;
        } catch (Exception $exc) {
            $response['success'] = FALSE;
            $response['message'] = $exc->getMessage();
        }
        echo json_encode($response);exit();
    }

    public function getLocations() {
        $locations = $this->Q3_model->getLocations();
        echo json_encode($locations);exit();
    }
    
    private function getTotalCost($surfaceArea, $metalCost, $coatingCost, $post) {
        $metalPurity = isset($post['metalPurity']) && $post['metalPurity'] != '' ? $post['metalPurity'] : 100;
        $metalCost = $surfaceArea * ($metalCost * $metalPurity / 100);
        $coatingThikness = isset($post['coatingThickness']) && $post['coatingThickness'] != '' ? $post['coatingThickness'] : 1;
        $coatingCost = $surfaceArea * ($coatingCost * $coatingThikness);
        return $metalCost + $coatingCost;
    }


}
