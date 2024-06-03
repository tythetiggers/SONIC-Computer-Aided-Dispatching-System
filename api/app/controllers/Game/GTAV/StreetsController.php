<?php

namespace App\Controllers\Game\GTAV;

use Core\Request;
use Core\Response;
use App\Models\Game\GTAV\StreetModel;
use Opencad\App\Helpers\Exceptions\Generic\InternalServerErrorException;

class StreetsController
{
    private $streetModel;

    public function __construct()
    {
        $this->streetModel = new StreetModel();
    }

     /**
     * Retrieve all streets
     *
     * @return void
     */
    public function index()
    {
        try {
            $streets = $this->streetModel->getAllStreets();
            if ($streets) {
                $response = Response::success($streets);
                $response->send();
            } else {
                $response = Response::notFound('No streets found');
                $response->send();
            }
        } catch (InternalServerErrorException $e) {
            $response = Response::internalServerError($e->getMessage());
            $response->send();
        }
    }

     /**
     * Retrieve a single street by ID
     *
     * @param int $id The ID of the street to retrieve
     * @return void
     */
    public function show($id)
    {
        try {
            $street = $this->streetModel->getStreetById($id);
            if ($street) {
                $response = Response::success($street);
                $response->send();
            } else {
                $response = Response::notFound("Street with ID {$id} not found");
                $response->send();
            }
        } catch (InternalServerErrorException $e) {
            $response = Response::internalServerError($e->getMessage());
            $response->send();
        }
    }

    
    /**
     * Add a new street
     *
     * @return void
     */
    public function create()
    {
        try {
            $data = Request::getData();
            $id = $this->streetModel->addStreet($data);
            if ($id) {
                $response = Response::created("Street added successfully with {$id}");
                $response->send();
            } else {
                $response = Response::badRequest('Error adding Street. Check Error Log');
                $response->send();
            }
        } catch (InternalServerErrorException $e) {
            $response = Response::internalServerError($e->getMessage());
            $response->send();
        }
    }

    
    /**
     * Update a street based on ID
     *
     * @return void
     */
    public function update($id)
    {
        $data = Request::getData();

        try {
            $this->streetModel->updateStreet($id, $data);
            $response = Response::success("Street updated successfully");
            $response->send();
        } catch (InternalServerErrorException $e) {
            $response = Response::internalServerError($e->getMessage());
            $response->send();
        }
    }

    
    /**
     * Delete Street based on ID
     *
     * @return void
     */
    public function delete($id)
    {        try {
            $this->streetModel->deleteStreet($id);
            $response = Response::success("Street deleted successfully");
            $response->send();
        } catch (InternalServerErrorException $e) {
            $response = Response::internalServerError($e->getMessage());
            $response->send();
        }
    }

}
