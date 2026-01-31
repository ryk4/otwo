<?php

namespace App\Http\Controllers;

class InformationPagesController extends Controller
{
    public function indexPrivacyPolicy()
    {
        return inertia('InformationPages/PrivacyPolicyPage');
    }

    public function indexTermsAndConditions()
    {
        return inertia('InformationPages/TermsAndConditionsPage');
    }

    public function indexCancellationPolicy()
    {
        return inertia('InformationPages/CancellationPolicyPage');
    }
}
