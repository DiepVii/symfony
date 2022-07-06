<?php
// src/Service/MessageGenerator.php
namespace App\Service;

use App\Entity\Type;
use App\Repository\TypeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

use function PHPSTORM_META\type;

class TypeService
{
    protected $TypeRepository;

    public function __construct(TypeRepository $TypeRepository)
    {
        $this->TypeRepository = $TypeRepository;
    }

    public function create(Request $request)
    {
        $type_name = $request->request->get('type_name');
        $type_description = $request->request->get('type_desc');
        $type = new Type();
        $type->setTypeName($type_name);
        $type->setTypeDescription($type_description);
        $this->TypeRepository->create($type);
        return $type;
    }

    public function show_type()
    {
        $type = $this->TypeRepository->show_type();
        return $type;
    }


    public function update(Request $request, $id)
    {
        $type_name = $request->request->get('type_name');
        $type_description = $request->request->get('type_desc');
        $data = [
            'type_name' => $type_name,
            'type_description' => $type_description
        ];
        $type = $this->TypeRepository->update($data, $id);
        return $type;
    }

    public function delete($id)
    {
        $type = $this->TypeRepository->delete($id);
        return $type;
    }

    public function find_type_byID($id)
    {
        $type = $this->TypeRepository->find_type_byID($id);
        return $type;
    }
}
