<?php
namespace Services;
use Repositories\DoctorRepository;

class DoctorService
{
    private $doctorRepository;

    public function __construct()
    {
        $this->doctorRepository = new DoctorRepository();
    }
    public function getAll(): ?array
    {
        return $this->doctorRepository->getAll();
    }
    public function registro(array $doctor): void
    {
        $this->doctorRepository->registro($doctor);
    }
    public function delete(int $id): void
    {
        $this->doctorRepository->delete($id);
    }
    public function read(int $id): array
    {
        return $this->doctorRepository->read($id);
    }
    public function filasAfectadas(): int
    {
        return $this->doctorRepository->filasAfectadas();
    }

}