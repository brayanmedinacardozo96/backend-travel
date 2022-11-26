<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;
use App\Models\TypeDocuments;
use App\Models\Department;
use App\Models\Gender;
use App\Models\Vulnerability;
use App\Models\Diversity;
use App\Models\EthnicGroup;
use App\Models\EducationLevel;
use App\Models\Disability;
use App\Models\Municipality;
use App\Models\Neighborhood;
use App\Models\ParameterDetail;

class CommonController extends Controller
{
    public function indexPeroson()
    {
        $typedocuments = TypeDocuments::all();
        $departments = Department::all();
        $municipality = Municipality::all();
        $genders = Gender::all();
        $vulnerabilities = Vulnerability::all();
        $diversities = Diversity::all();
        $ethnicgroups = EthnicGroup::all();
        $educationlevels = EducationLevel::all();
        $disabilities = Disability::all();
        $commune = Commune::where('name', '<>', 'Otra')->get();
        $neighborhood = Neighborhood::where('name', '<>', 'Otro')->orderBy('name')->get();
        $sisben = ParameterDetail::where('parameter_id', 3)->get();
        $group_people = ParameterDetail::where('parameter_id', 5)->get();
        $working_day = ParameterDetail::where('parameter_id', 6)->get();

        return response()->json([
            'typedocuments' => $typedocuments,
            'departments' => $departments,
            'genders' => $genders,
            'vulnerabilities' => $vulnerabilities,
            'diversities' => $diversities,
            'ethnicgroups' => $ethnicgroups,
            'educationlevels' => $educationlevels,
            'disabilities' => $disabilities,
            'municipality' => $municipality,
            'commune' => $commune,
            'neighborhood' => $neighborhood,
            'sisben' => $sisben,
            'group_people' => $group_people,
            'working_day' => $working_day
        ]);
    }
}
