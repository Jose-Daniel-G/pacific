<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuotationController extends Controller
{
    public function index()
    {
        return view('cotizacion.index');
    }

    public function search(Request $request)
    {
        $request->validate([
            'quotation_id' => 'required|integer',
        ]);

        $id = $request->quotation_id;

        $data = DB::select('
            SELECT DISTINCT
                patient_entity.first_name AS patient_first_name,
                patient_entity.last_name AS patient_last_name,
                patient_entity.identification AS patient_identification,
                doctor_entity.first_name AS doctor_first_name,
                doctor_entity.last_name AS doctor_last_name,
                event.init_date,
                slot.init_time,
                slot.end_time
            FROM adm_admission_appointment aaa
            JOIN sch_workflow_slot_assigned wfsa ON wfsa.id = aaa.flow_id
            JOIN sch_slot_assigned sa ON sa.id = wfsa.sch_slot_assigned_id
            JOIN gbl_entity patient_entity ON patient_entity.id = sa.entity_id
            JOIN sch_slot slot ON slot.id = sa.sch_slot_id
            JOIN sch_event event ON event.id = slot.sch_event_id
            JOIN sch_calendar cal ON cal.id = event.sch_calendar_id
            JOIN gbl_entity doctor_entity ON doctor_entity.id = cal.entity_id
            WHERE aaa.adm_admission_id IN (
                SELECT aa.id
                FROM com_quotation cq
                JOIN com_quotation_line cql ON cql.com_quotation_id = cq.id
                JOIN cnt_medical_order_medicament_quotation momq ON momq.line_id = cql.id
                JOIN cnt_medical_order_medicament mom ON mom.id = momq.cnt_medical_order_medicament_id
                JOIN cnt_medical_order mo ON mo.id = mom.cnt_medical_order_id
                JOIN adm_admission_flow aaf ON aaf.id = mo.adm_admission_flow_id
                JOIN adm_admission aa ON aa.id = aaf.adm_admission_id
                WHERE cq.id = ?
            )
        ', [$id]);

        return view('cotizacion.index', compact('data'));
    }
}
