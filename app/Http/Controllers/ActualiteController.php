<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;
use Carbon\Carbon;

class ActualiteController extends Controller
{
    // Page publique
    public function index($year = null, $month = null)
    {
        $actualites = Actualite::orderBy('date_publication', 'desc')->get();

        $now = Carbon::create($year ?? now()->year, $month ?? now()->month, 1);
        $calendarTitle = $now->translatedFormat('F Y');
        $firstDay = $now->copy()->firstOfMonth()->dayOfWeek;
        $daysInMonth = $now->daysInMonth;

        $calendarWeeks = [];
        $week = array_fill(0, $firstDay, 0);
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $week[] = $day;
            if (count($week) == 7) { $calendarWeeks[] = $week; $week = []; }
        }
        if (!empty($week)) {
            $week = array_merge($week, array_fill(0, 7 - count($week), 0));
            $calendarWeeks[] = $week;
        }

        $prevUrl = url('actualite/' . $now->copy()->subMonth()->format('Y/m'));
        $nextUrl = url('actualite/' . $now->copy()->addMonth()->format('Y/m'));
        $prevMonth = $now->copy()->subMonth()->translatedFormat('M');
        $nextMonth = $now->copy()->addMonth()->translatedFormat('M');

        return view('pages.actualite.actualite', compact(
            'actualites', 'calendarTitle', 'calendarWeeks',
            'prevMonth', 'nextMonth', 'prevUrl', 'nextUrl', 'now'
        ));
    }

    // Admin - liste
    public function adminIndex()
    {
        $actualites = Actualite::orderBy('date_publication', 'desc')->get();
        return view('pages.backoffice.actualites.index', compact('actualites'));
    }

    // Admin - formulaire création
    public function create()
    {
        return view('pages.backoffice.actualites.create');
    }

    // Admin - enregistrer
    public function store(Request $request)
    {
        $request->validate([
            'titre'            => 'required|string|max:255',
            'description'      => 'required|string',
            'categorie'        => 'required|string',
            'date_publication' => 'required|date',
            'image'            => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('actualites', 'public');
        }

        Actualite::create($data);
        return redirect()->route('admin.actualites.index')->with('success', 'Article créé avec succès.');
    }

    // Admin - formulaire édition
    public function edit(Actualite $actualite)
    {
        return view('pages.backoffice.actualites.edit', compact('actualite'));
    }

    // Admin - mettre à jour
    public function update(Request $request, Actualite $actualite)
    {
        $request->validate([
            'titre'            => 'required|string|max:255',
            'description'      => 'required|string',
            'categorie'        => 'required|string',
            'date_publication' => 'required|date',
            'image'            => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('actualites', 'public');
        }

        $actualite->update($data);
        return redirect()->route('admin.actualites.index')->with('success', 'Article mis à jour.');
    }

    // Admin - supprimer
    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return redirect()->route('admin.actualites.index')->with('success', 'Article supprimé.');
    }
}
