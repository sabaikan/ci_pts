<?php

namespace App\Models;

use CodeIgniter\Model;

class NasiBekeporModel extends Model
{
    protected $table            = 'nasi_bekepor';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_makanan',
        'kategori',
        'asal_daerah',
        'harga',
        'stok',
        'rating',
        'deskripsi',
        'gambar'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    /**
     * Filter dan Sorting menu Nasi Bekepor
     */
    public function getFilteredSorted(?string $kategori = null, ?string $sort = null, ?string $search = null)
    {
        $builder = $this;

        if (!empty($search)) {
            $builder = $builder->groupStart()
                ->like('nama_makanan', $search)
                ->orLike('deskripsi', $search)
                ->orLike('kategori', $search)
                ->groupEnd();
        }

        if (!empty($kategori) && $kategori !== 'Semua') {
            $builder = $builder->where('kategori', $kategori);
        }

        switch ($sort) {
            case 'harga_asc':
                $builder = $builder->orderBy('harga', 'ASC');
                break;
            case 'harga_desc':
                $builder = $builder->orderBy('harga', 'DESC');
                break;
            case 'nama_asc':
                $builder = $builder->orderBy('nama_makanan', 'ASC');
                break;
            case 'nama_desc':
                $builder = $builder->orderBy('nama_makanan', 'DESC');
                break;
            case 'rating_desc':
                $builder = $builder->orderBy('rating', 'DESC');
                break;
            case 'stok_desc':
                $builder = $builder->orderBy('stok', 'DESC');
                break;
            default:
                $builder = $builder->orderBy('id', 'ASC');
                break;
        }

        return $builder->findAll();
    }
}
