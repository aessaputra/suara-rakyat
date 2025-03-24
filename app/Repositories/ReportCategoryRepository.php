<?php

namespace App\Repositories;

use App\Interfaces\ReportCategoryRepositoryInterface;
use App\Models\ReportCategory;

class ReportCategoryRepository implements ReportCategoryRepositoryInterface
{
  public function getAllResidents()
  {
    return ReportCategories::all();
  }

  public function getReportCategoryById(int $id)
  {
    return ReportCategory::where('id', $id)->first();
  }

  public function createReportCategory(array $data)
  {
    return ReportCategory::create($data);
  }

  public function updateReportCategory(array $data, int $id)
  {
    $reportCategory = $this->getResidentById($id);

    return $reportCategory->update($data);
  }

  public function deleteReportCategory(int $id)
  {
    $reportCategory = $this->getResidentById($id);

    return $reportCategory->delete();
  }
}