<?php

namespace App\Repositories;

use App\Models\Facility;

class FacilityRepository
{
    public function showAll($request)
    {
        $facility = Facility::orderBy('id', 'DESC');
        if (!empty($request->search)) {
            $facility = $facility->where('name', 'LIKE', '%' . $request->search . '%');
        }
        $facility = $facility->paginate(5);
        $facility->appends($request->all());

        return $facility;
    }

    public function getFacilityDatatable($request)
    {
        $columns = array(
            0 => 'facility.id',
            1 => 'facility.name',
            2 => 'facility.information',
            3 => 'facility.id',
        );

        $limit          = $request->input('length');
        $start          = $request->input('start');
        $order          = $columns[$request->input('order.0.column')];
        $dir            = $request->input('order.0.dir');

        $main_query = Facility::select(
            'facility.id as number',
            'facility.name',
            'facility.information',
            'facility.id'
        );

        $totalData = $main_query->get()->count();

        // Filter global column
        if ($request->input('search.value')) {
            $search = $request->input('search.value');
            $main_query->where(function ($query) use ($search, $columns) {
                $i = 0;
                foreach ($columns as $column) {
                    if ($i == 0) { // Fixed the comparison operator here
                        $query->where($column, 'LIKE', "%{$search}%");
                    } else {
                        $query->orWhere($column, 'LIKE', "%{$search}%");
                    }
                    $i++;
                }
            });
        }

        $totalFiltered = $main_query->count();

        $main_query->offset($start)
            ->limit($limit)
            ->orderBy($order, $dir);

        $models = $main_query->get();

        $data = [];
        if (!empty($models)) {
            foreach ($models as $model) {
                $data[] = array(
                    "number" => $model->id,
                    "name" => $model->name,
                    "information" => $model->information,
                    "id" => $model->id,
                );
            }
        }

        $response = array(
            "draw" => intval($request->input('draw')),
            "iTotalRecords" => $totalData,
            "iTotalDisplayRecords" => $totalFiltered,
            "aaData" => $data
        );

        return json_encode($response);
    }

    public function store($facilityData)
    {
        $facility = new Facility;
        $facility->name = $facilityData->name;
        $facility->information = $facilityData->information;
        $facility->save();

        return $facility;
    }
}
