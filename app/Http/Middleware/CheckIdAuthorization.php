<?php

namespace App\Http\Middleware;

use App\Models\Bimbingan;
use App\Models\Outline;
use App\Models\Proposal;
use App\Models\Skripsi;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIdAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role, $bagian): Response
    {
        // if ($bagian == 'outline')
        // {
        //     if ($role == 'mahasiswa')
        //     {
        //         $outlineId = $request->route('outline_mahasiswa');
        //         $outline = Outline::find($outlineId);
        //         if ($outline->id_mahasiswa != auth()->user()->mahasiswa()->id)
        //         {
        //             abort(403);
        //         }
        //     }
        //     elseif ($role == 'dosen')
        //     {
        //         $outlineId = $request->route('outline_dosen_penilai');
        //         $outline = Outline::find($outlineId);
        //         if (!($outline->id_dosen_penilai_1 == auth()->user()->dosen->id || $outline->id_dosen_penilai_2 == auth()->user()->dosen->id))
        //         {
        //             abort(403);
        //         }
        //     }
        // }
        // elseif ($bagian == 'proposal')
        // {
        //     if ($role == 'mahasiswa')
        //     {
        //         $proposalId = $request->route('proposal_pengajuan');
        //         $proposal = Proposal::find($proposalId);
        //         if ($proposal->id_mahasiswa != auth()->user()->mahasiswa()->id)
        //         {
        //             abort(403);
        //         }
        //     }
        //     elseif ($role == 'dosen')
        //     {
        //         $proposalId = $request->route('proposal_dosen_penguji');
        //         $proposal = Proposal::find($proposalId);
        //         if (!($proposal->id_dosen_penguji_proposal_1 == auth()->user()->dosen->id || $proposal->id_dosen_penguji_proposal_2 == auth()->user()->dosen->id))
        //         {
        //             abort(403);
        //         }
        //     }
        // }
        // elseif ($bagian == 'bimbingan')
        // {
        //     if ($role == 'mahasiswa')
        //     {
        //         $bimbinganId = $request->route('bimbingan_pengajuan');
        //         $bimbingan = Bimbingan::find($bimbinganId);
        //         if ($bimbingan->id_mahasiswa != auth()->user()->mahasiswa()->id)
        //         {
        //             abort(403);
        //         }
        //     }
        //     elseif ($role == 'dosen')
        //     {
        //         $bimbinganId = $request->route('bimbingan_dosen_pembimbing');
        //         $bimbingan = Bimbingan::find($bimbinganId);
        //         if (!(auth()->user()->dosen->id == $bimbingan->id_dosen_pembimbing_1
        //             || auth()->user()->dosen->id == $bimbingan->id_dosen_pembimbing_2
        //             || auth()->user()->dosen->id == $bimbingan->id_dosen_pembimbing_abstrak))
        //         {
        //             abort(403);
        //         }
        //     }
        // }
        // elseif ($bagian == 'skripsi')
        // {
        //     if ($role == 'mahasiswa')
        //     {
        //         $skripsiId = $request->route('skripsi');
        //         $skripsi = Skripsi::find($skripsiId);
        //         if ($skripsi->id_mahasiswa != auth()->user()->mahasiswa()->id)
        //         {
        //             abort(403);
        //         }
        //     }
        //     elseif ($role == 'dosen')
        //     {
        //         $skripsiId = $request->route('skripsi_dosen');
        //         $skripsi = Skripsi::find($skripsiId);
        //         if (!(auth()->user()->dosen->id == $skripsi->id_dosen_pembimbing_1
        //             || auth()->user()->dosen->id == $skripsi->id_dosen_pembimbing_2
        //             || auth()->user()->dosen->id == $skripsi->id_dosen_pembimbing_abstrak))
        //         {
        //             abort(403);
        //         }
        //     }
        // }

        return $next($request);
    }
}
