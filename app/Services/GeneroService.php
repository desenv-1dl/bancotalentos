<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 02/11/2015
 * Time: 15:02
 */

namespace Sip\Services;


use Sip\Repositories\GeneroRepository;
use Sip\Validators\GeneroValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class GeneroService
{
    /**
     * @var GeneroRepository $repository
     */
    protected $repository;

    /**
     * @var GeneroValidator $validator
     */
    private $validator;


    /**
     * GeneroService constructor.
     * @param GeneroRepository $repository
     */
    public function __construct(GeneroRepository $repository, GeneroValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data){
        try{

            $this->validator->with($data)->passesOrFail();

            return $this->repository->create($data);

        } catch(ValidatorException $e){

            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }

    }

    public function update(array $data, $id){
        try{

            $this->validator->with($data)->passesOrFail();

            return $this->repository->update($data, $id);

        } catch(ValidatorException $e){

            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    /**
     * Delete the client
     *
     * @param  integer $id   client id
     * @return json
     */
    public function delete($id)
    {
        try
        {
            //$this->repository->find($id)->projects()->delete();
            $this->repository->delete($id);

            return ['success' => true];

        }
        catch (\Exception $e)
        {
            return [
                "error" => true,
                "message" => $e->getMessage()
            ];
        }
    }

}