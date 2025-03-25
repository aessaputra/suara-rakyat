<?php

namespace App\Repositories;

use App\Interfaces\ReportStatusRepositoryInterface;
use App\Models\ReportStatus;

class ReportStatusRepository implements ReportStatusRepositoryInterface
{
  public function getAllReportStatuses()
  {
    return ReportStatus::all();
  }

  public function getReportById(int $id)
  {
    return ReportStatus::where('id', $id)->first();
  }

  public function createReportSatus(array $data)
  {
    return Report::create($data);
  }

  public function updateReportStatus(array $data, int $id)
  {
    $reportStatus = $this->getReportStatusById($id);

    return $reportStatus->update($data);
  }

  public function deleteReportStatus(int $id)
  {
    $reportStatus = $this->getReportStatusById($id);

    return $reportStatus->delete();
  }
}