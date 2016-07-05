<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 02/11/2015
 * Time: 15:02
 */

namespace Sip\Services;


use Sip\Repositories\OrganizacaoRepository;
use Sip\Validators\OrganizacaoValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class OrganizacaoService
{
    /**
     * @var OrganizacaoRepository $repository
     */
    protected $repository;

    /**
     * @var OrganizacaoValidator $validator
     */
    private $validator;


    /**
     * OrganizacaoService constructor.
     * @param OrganizacaoRepository $repository
     */
    public function __construct(OrganizacaoRepository $repository, OrganizacaoValidator $validator)
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