@include('partials.header')
@section('title', $viewData['page_title'])
@include('partials.footer')

<div><img src="{{ asset('/img/gov-ca-logo-blackandwhite.png')}}" width="350"></div>
<div>
    <h4>APPLICATION TO CHANGE CONDITIONS,<br>EXTEND MY STAY OR REMAIN IN CANADA AS A WORKER</h4>
</div>
<div>
    <p style="font-size: small;">If you need more space for any section, print out an additional page containing the appropriate section, complete and submit it with your applicaton.</p>

    <table class="tg">
        <thead>
            <tr>
                <th class="tg-0lax"><span style="font-weight:bold">1 UCI</span></th>
                <th class="tg-0lax"><span style="font-weight:bold">2 *I want service in: English/French </span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-0lax" colspan="2"><span style="font-weight:bold">3. I am applying for one or more of the following: </span><br><br><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">* Apply for a work permit with the same employer&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">* Restore my status as a worker&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">* Apply for a work permit for the first time or with a new employer<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">* Get a new temporary resident permit (for inadmissible applicants only)</td>
            </tr>
        </tbody>
    </table>
    <b>PERSONAL DETAILS</b>
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-0lax" colspan="3"><span style="font-weight:bold">1 Full name    </span><br><span style="font-weight:normal">* Family name (as shown on your passport or travel document)  {{ $viewData['applicant']['lName'] }}</span><br><br></th>
                <th class="tg-0lax" colspan="2"><br>Given name(s) (as shown on your passport or travel document)  {{ $viewData['applicant']['fName'] }} </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:bold">2 a) Have you ever used any other name (e.g. Nickname, maiden name, alias, etc.) ?</span> </span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><span style="font-weight:bold"> b) If you answered "yes" to question 2a), </span><span style="font-weight:normal">please provide the name (e.g. Nickname, maiden name, alias, etc.)</span></td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="3">&nbsp;&nbsp;&nbsp;Family Name {{ $viewData['applicant']['plName']}}</td>
                <td class="tg-0lax" colspan="2">Given name(s)  {{ $viewData['applicant']['pfName']}}</td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-weight:bold">3 Sex  </span><br><br> {{ $viewData['applicant']['gender']}}</td>
                <td class="tg-0lax"><span style="font-weight:bold">4 Date of Birth  </span><br><br> {{ $viewData['applicant']['dob']}}</td>
                <td class="tg-0lax" colspan="2"><span style="font-weight:bold">5. Place of birth</span><br><span style="font-weight:normal">* City/Town  {{ $viewData['applicant']['cityOfBirth']}}</span><br></td>
                <td class="tg-0lax">* Country or Territory  {{ $viewData['applicant']['countryOfBirth']}}<br><br></td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:bold">6 * Citizenship  </span> {{ $viewData['applicant']['citizenshipCountry']}}</td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:bold">7 Current country or territory of residence </span></td>
            </tr>
            <tr>
                <td class="tg-0lax">Country or Territory  {{ $viewData['applicant']['residenceCountry']}}</td>
                <td class="tg-0lax">Status </td>
                <td class="tg-0lax">Other </td>
                <td class="tg-0lax">From  </td>
                <td class="tg-0lax">To</td>
            </tr>
 
            <tr>
                <td class="tg-0lax">* Canada</td> 
                <td class="tg-0lax"> {{ $viewData['applicant']['residenceStatus']}} </td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax">2020-12-08 </td>
                <td class="tg-0lax">2022-12-31</td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:bold">8 a) Previous countries or territories of residence: </span><span style="font-weight:normal">During the past five years have you lived in any country or territory other than your country</span><br><span style="font-weight:normal">of citizenship or your current country or territory of residence (indicated above) for more than six months?</span> </span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><span style="font-weight:normal">&nbsp;&nbsp;&nbsp;</span><span style="font-weight:bold">b) If you answered "yes" to question 8a), </span><span style="font-weight:normal">please provide details</span></td>
            </tr>
            <tr>
                <td class="tg-0lax">Country or Territory</td>
                <td class="tg-0lax">Status</td>
                <td class="tg-0lax">Other</td>
                <td class="tg-0lax">From</td>
                <td class="tg-0lax">To</td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax">YYYY-MM-DD</td>
                <td class="tg-0lax">YYYY-MM-DD</td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax">YYYY-MM-DD</td>
                <td class="tg-0lax">YYYY-MM-DD</td>
            </tr>
            <tr>
                <td class="tg-1wig">9 * a) Your current marital status  {{ $viewData['applicant']['maritalStatus']}}<br><br></td>
                <td class="tg-0lax" colspan="3"><span style="font-weight:bold">b) (If you are married or in a common-law relationship) </span><span style="font-weight:normal">Provide the date</span><br><span style="font-weight:normal">on which you were married or entered into the common-law relationship</span></td>
                <td class="tg-0lax">Date<br><br>YYYY-MM-DD  {{ $viewData['applicant']['mariageDate']}}</td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="3"> <span style="font-weight:bold">c)</span><span style="font-weight:normal"> Provide the name of your current Spouse/Common-law partner</span><br><span style="font-weight:normal"> Family name</span><br><br></td>
                <td class="tg-0lax" colspan="2"><br>Given name(s)<br><br></td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="5"> <span style="font-weight:bold">d) </span><span style="font-weight:normal">If you are married or in a common-law relationship, is your spouse or common-law partner a Canadian citizen or permanent resident? </span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-baqh" colspan="5">FOR OFFICE USE ONLY - DO NOT WRITE IN THIS SPACE<br><br><br></td>
            </tr>
        </tbody>
    </table>
    <b>PERSONAL DETAILS(CONTINUED)</b>
    <table class="tg">
        <tbody>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:bold">10 a) Have you previously been married or in a common-law relationship ?</span> </span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><span style="font-weight:normal">b) Provide the following details for your previous Spouse/Common-law partner:</span></td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="3">&nbsp;&nbsp;&nbsp;Family Name</td>
                <td class="tg-0lax" colspan="2">Given name(s)</td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-weight:normal">c) Type of relationship</span></td>
                <td class="tg-0lax"><span style="font-weight:normal">d) From<br><br> YYYY-MM-DD</span></td>
                <td class="tg-0lax" colspan="2"><span style="font-weight:normal">To <br><br> YYYY-MM-DD</td>
                <td class="tg-0lax">e) Date of Birth<br><br>YYYY MM DD</td>
            </tr>
        </tbody>
    </table>
    <b>LANGUAGE(S)</b>
    <table class="tg">
        <tbody>
            <tr>
                <td class="tg-1wig">1 * a) Native language/Mother Tongue<br><br> {{ $viewData['applicant']['nativeLanguage']}}</td>
                <td class="tg-0lax" colspan="3"><span style="font-weight:normal">b) Are you able to communicate in English and/or French?  </span>Yes</td>
                <td class="tg-0lax" colspan="3"><span style="font-weight:normal">c) In which language are you most at ease? </span> {{ $viewData['applicant']['nativeLanguage']}}</td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:normal">d) Have you taken a test from a designated testing agency to assess your proficiency in English or French?   </span> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">{ $viewData['applicant']['languageExam']}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <b>PASSPORT</b>
    <table class="tg">
        <tbody>
            <tr>
                <td class="tg-0lax"><span style="font-weight:normal">1 * Passport number         </span><br> {{ $viewData['applicant']['passportNumber']}}</td>
                <td class="tg-0lax"><span style="font-weight:normal">2 * Country or territory of issue </span> <br> {{ $viewData['applicant']['passportCountryofIssue']}}</td>
                <td class="tg-0lax" colspan="2"><span style="font-weight:normal">3 * Issue date <br><br> YYYY-MM-DD   {{ $viewData['applicant']['passportIssueDate']}}</td>
                <td class="tg-0lax">4 * Expiry date<br><br>YYYY MM DD  {{ $viewData['applicant']['passportExpiryDate']}}</td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:normal">5 * For this trip, will you use a passport issued by the Ministry of Foreign Affairs in Taiwan that includes your personal identification number? </span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:normal">6 * For this trip, will you use a National Israeli passport? </span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <b>NATIONAL IDENTITY DOCUMENT</b>
    <table class="tg">
        <tbody>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:normal">1 * Do you have a national identity document? </span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-weight:normal">2 * Document number </span> {{ $viewData['applicant']['passportNumber']}}</td>
                <td class="tg-0lax"><span style="font-weight:normal">3 * Country or territory of issue</span> {{ $viewData['applicant']['passportCountryofIssue']}}</td>
                <td class="tg-0lax" colspan="2"><span style="font-weight:normal">4 * Issue date <br><br> YYYY-MM-DD   {{ $viewData['applicant']['passportIssueDate']}}</td>
                <td class="tg-0lax">5 * Expiry date<br><br>YYYY MM DD   {{ $viewData['applicant']['passportExpiryDate']}}</td>
            </tr>
        </tbody>
    </table>
    <b>US PR CARD</b>
    <table class="tg">
        <tbody>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:normal">1 Are you a lawful Permanent Resident of the United States with a valid alien registration card (green card)? </span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-weight:normal">2 Document number</span></td>
                <td class="tg-0lax"><span style="font-weight:normal">3 Expiry date <br><br>YYYY MM DD</span></td>
            </tr>
        </tbody>
    </table>
    <b>CONTACT INFORMATION</b>
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-1wig" colspan="5"><span style="font-weight:bold">If submitting your information by mail:<br></span><span style="font-weight: normal;">- All correspondence will go to this address unless you indicate your e-mail address below.<br>- Indicating an e-mail address will authorize all correspondence, including file and personal information, to be sent to the e-mail address you specify.<br>- If you wish to authorize the release of information from your application to a representative, indicate their e-mail and mailing address(es) in this section and on the IMM5476 form.</span><br></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:bold">1 Current mailing address</span></td>
            </tr>
            <tr>
                <td class="tg-0lax">P.O box</td>
                <td class="tg-0lax">Apt/Unit</td>
                <td class="tg-0lax">Street no.</td>
                <td class="tg-0lax" colspan="2">* Street name  {{ $viewData['applicant']['residentialAddress']}}</td>
            </tr>
            <tr>
                <td class="tg-0lax">* City/Town</td><br>Surrey</td>
                <td class="tg-0lax">* Country or Territory<br>Canada</td>
                <td class="tg-0lax">* Province</td>
                <td class="tg-0lax">* Postal code</td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-1wig" colspan="5">2 Residential address <span style="font-weight:normal">Same as mailing address?     Yes</span></span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-0lax">Apt/Unit<br><br></td>
                <td class="tg-0lax">Street no.<br><br></td>
                <td class="tg-0lax" colspan="3">Street name<br><br></td>
            </tr>
            <tr>
                <td class="tg-0lax">City/Town<br><br></td>
                <td class="tg-0lax">Country or Territory<br>Canada</td>
                <td class="tg-0lax">Province</td>
                <td class="tg-0lax">Postal code</td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="3"><span style="font-weight:bold">3 Telephone no.  {{ $viewData['applicant']['phone']}}</span></span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Canada/US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><span style="font-weight:normal">Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ext.</span><br><br></td>
                <td class="tg-0lax" colspan="2"><span style="font-weight:bold">4. Alternate Telephone no</span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Canada/US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><span style="font-weight:normal">Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ext.</span><br><br></td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="3"><span style="font-weight:bold">5 Fax no.</span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Canada/US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><span style="font-weight:normal">Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ext.</span><br><br></td>
                <td class="tg-0lax" colspan="2"><span style="font-weight:bold">6 E-mail address  {{ $viewData['applicant']['email']}}</span></td>
            </tr>
        </tbody>
    </table>
    <b>COMING INTO CANADA</b>
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-0pky">Date and place of your original entry do Canada<br>* Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YYYY-MM-DD   {{ $viewData['applicant']['OriginalComingToCanadaDate']}}</th>
                <th class="tg-0pky">* Place  Vancouver YVR<br> <br></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-0pky">2 *a) The original purpose for coming to Canada<br><br> {{ $viewData['applicant']['OriginalComingToCanadaPurpose']}}</td>
                <td class="tg-0pky">b) Other<br><br></td>
            </tr>
            <tr>
                <td class="tg-0pky">3 Date and place of your most recent entry to <br>Canada (if not the same as original entry)  <br>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YYYY-MM-DD    {{ $viewData['applicant']['MostRecentComingToCanadaDate']}}  </td>
                <td class="tg-0pky">Place<br></td>
            </tr>
            <tr>
                <td class="tg-0pky">4 If applicable, provide the document number of the most recent Visitor Record, Study<br>Permit, Work Permit or Temporary Resident Permit issued to you.</td>
                <td class="tg-0pky">Document Number<br><br>  {{ $viewData['applicant']['PreviousPermitNumber']}}</td>
            </tr>
        </tbody>
    </table>
    <b>DETAILS OF INTENDED WORK IN CANADA</b>
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-0lax" colspan="2"><span style="font-weight:bold">1</span><span style="font-weight:normal"> *a) What type of work permit are you applying for?</span><br><br>  {{ $viewData['applicant']['IntendedWork']}}</th>
                <th class="tg-0lax" colspan="2">b) Other<br><br></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-0lax" colspan="4"><span style="font-weight:bold">2 </span><span style="font-weight:normal">Details of my prospective employer (attach original offer of employment)</span>  {</td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="4">a) Name of employer (If you are employed by a foreign employer who has been awarded a contract to provide services to a Canadian entity, please identify the foreign employer here)<br><br> {{ $viewData['applicant']['Employer']}}</td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="4">b) Complete Address of Employer (Canadian or Foreign):<br><br></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-weight:bold">3 </span><span style="font-weight:normal">Intended location of employment in Canada?</span><br><span style="font-weight:normal">Province</span><br><br></td>
                <td class="tg-0lax"><br>City/Town</td>
                <td class="tg-0lax" colspan="2"><br>Address</td>
            </tr>
            <tr>
                <td class="tg-1wig" colspan="2">4 <span style="font-weight:normal">My occupation in Canada will be:</span><br><span style="font-weight:normal">Job title</span></td>
                <td class="tg-0lax" colspan="2"><br>Brief description of duties</td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-weight:bold">5 </span><span style="font-weight:normal">Duration of expected employment</span><br><br></td>
                <td class="tg-0lax">From<br><br>YYYY-MM-DD</td>
                <td class="tg-0lax">To<br><br>YYYY-MM-DD</td>
                <td class="tg-0lax"><span style="font-weight:bold">6 </span><span style="font-weight:normal">Labour Market Impact Assessment (LMIA) No. or Offer of Employment (LMIA Exempt) No.</span></td>
            </tr>
            <tr>
                <td class="tg-1wig">7 <span style="font-weight:normal">If you have been issued a Quebec Acceptance Certificate (CAQ), provide the:</span><br><span style="font-weight:normal">Certificate Number</span><br><br></td>
                <td class="tg-0lax"><br>Expiry Date<br><br></td>
                <td class="tg-0lax" colspan="2"></td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="4"><span style="font-weight:bold">8 </span><span style="font-weight:normal">Have you been issued a certificate under the Provincial Nominee program?<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
            </tr>
        </tbody>
    </table>
    <b>EDUCATION</b>
    <table class="tg">
        <tbody>
            <tr>
                <td class="tg-0lax" colspan="5"><span style="font-weight:normal">Have you had any post secondary education (including university, college or apprenticeship training)? </span><img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>If you answered "yes", give full details of your highest level of post secondary education.</td>
            </tr>
            <tr>
                <td class="tg-baqh" rowspan="2"><br><span style="font-weight:bold">1</span></td>
                <td class="tg-0lax">From<br><br>YYYY MM</td>
                <td class="tg-0lax">Field and level of study <br><br> Computer Science</td>
                <td class="tg-0lax" colspan="2">School/Facility name<br><br> {{ $viewData['applicant']['Education']}}</td>
            </tr>
            <tr>
                <td class="tg-0lax">To<br>YYYY MM</td>
                <td class="tg-0lax">City/Town<br><br></td>
                <td class="tg-0lax">Country or Territory</td>
                <td class="tg-0lax">Province/State<br><br></td>
            </tr>
        </tbody>
    </table>
    <b>EMPLOYMENT</b>
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-0lax" colspan="5">Give details of your employment for the past 10 years, including if you have held any government positions (such as civil servant, judge, police officer, mayor, member of parliament,<br>hospital administrator)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-baqh" rowspan="2"><br><span style="font-weight:bold">1</span></td>
                <td class="tg-0lax">From<br><br>YYYY MM</td>
                <td class="tg-0lax">* Current Activity/Occupation</td>
                <td class="tg-0lax">* Company/Employer/Facility name<br><br></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax">To<br>YYYY MM</td>
                <td class="tg-0lax">City/Town<br><br></td>
                <td class="tg-0lax">Country or Territory</td>
                <td class="tg-0lax">Province/State<br><br></td>
            </tr>
        </tbody>
    </table>
    <b>EMPLOYMENT(CONTINUED)</b>
    <table class="tg">
        <tbody>
            <tr>
                <td class="tg-baqh" rowspan="2"><br><span style="font-weight:bold">2</span></td>
                <td class="tg-0lax">From<br><br>YYYY MM</td>
                <td class="tg-0lax">Previous Activity/Occupation</td>
                <td class="tg-0lax">Company/Employer/Facility name<br><br></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax">To<br>YYYY MM</td>
                <td class="tg-0lax">City/Town<br><br></td>
                <td class="tg-0lax">Country or Territory</td>
                <td class="tg-0lax">Province/State<br><br></td>
            </tr>
            <tr>
                <td class="tg-baqh" rowspan="2"><br><span style="font-weight:bold">3</span></td>
                <td class="tg-0lax">From<br><br>YYYY MM</td>
                <td class="tg-0lax">Previous Activity/Occupation</td>
                <td class="tg-0lax">Company/Employer/Facility name<br><br></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax">To<br>YYYY MM</td>
                <td class="tg-0lax">City/Town<br><br></td>
                <td class="tg-0lax">Country or Territory</td>
                <td class="tg-0lax">Province/State<br><br></td>
            </tr>
        </tbody>
    </table>
    <b>BACKGROUND INFORMATION</b>
    <p style="font-size: small;"><b>You must complete this section if you are 18 years of age or older.</b></p>
    <table class="tg">
        <thead>
            <tr>
                <td class="tg-0lax"><span style="font-weight:bold">1 </span><span style="font-weight:normal">a) Within the past two years, have your or a family member ever had tuberculosis of the lungs or been in close contact with a person with tuberculosis? <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></span><span style="font-weight:normal">&nbsp;&nbsp;&nbsp;b) Do you have any physical or mental disorder that would require social and/or health services, other than medication, during stay in Canada?</span> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><span style="font-weight:normal">&nbsp;&nbsp;&nbsp;c) If you answered "yes" to question 1a) or 1b), please provide details:</span><br><br><br></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-weight:bold">2 </span><span style="font-weight:normal">a) Have you ever remained beyond the validity of your status, attended school without authorization or worked without authorization in Canada? <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></span><span style="font-weight:normal">&nbsp;&nbsp;&nbsp;b) Have you ever been refused a visa or permit, denied entry or ordered to leave Canada or any other country or territory?</span> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><span style="font-weight:normal">c) Have you previously applied to enter or remain in Canada? <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></span><span style="font-weight:normal">&nbsp;&nbsp;&nbsp;c) If you answered "yes" to question 2a), 2b) or 2c), please provide details:</span><br><br><br></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-weight:bold">3 </span><span style="font-weight:normal">a) Have you ever committed, been arrested for or been charged with or convicted of any criminal offence in any country or territory?<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-weight:normal">&nbsp;&nbsp;&nbsp;<br><span style="font-weight:normal">&nbsp;&nbsp;&nbsp;b) If you answered "yes" to question 3a), please provide details:</span><br><br><br></td>
            </tr>
        </thead>
    </table>
    <b>BACKGROUND INFORMATION(CONTINUED)</b>
    <table class="tg">
        <thead>
            <tr>
                <td class="tg-0lax"><span style="font-weight:bold">4 </span><span style="font-weight:normal">a) Did you serve in any military, militia, or civil defence unit or serve in a security organization or police force (including non obligatory national service, reserve or volunteer units)?<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-weight:normal">&nbsp;&nbsp;&nbsp;<br><span style="font-weight:normal">&nbsp;&nbsp;&nbsp;b) If you answered "yes" to question 4a), please provide dates of service and countries or territories where you served.</span><br><br><br></td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-weight:bold">5 </span><span style="font-weight:normal">Are you, or have you ever been a member or associated with any political party, or other group or organization which has engaged in or advocated violence<br> as a means to achieving a political or religious objective, or which has been associatead with criminal activity at any time? <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-weight:normal">&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td class="tg-0lax"><span style="font-weight:bold">6 </span><span style="font-weight:normal">Have you ever witnessesd or participated in the ill treatment of prisoners or civilians, looting or desecration of religious buildings? <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-weight:normal">&nbsp;&nbsp;&nbsp;</td>
            </tr>
    </table>
    <b>SIGNATURE</b>
    <table class="tg">
        <thead>
            <tr>
                <td class="tg-0lax">Citizenship and Immigration Canada (CIC), or an organization at CIC request, may want to contact you in the future to ask you about any services you received from CIC prior to the<br>application process (such as participation in an information forum), during the application process (including the application process itself as well as orientation or accreditation services),<br>and services received after arriving in Canada (including settlement, integration and citizenship). CIC will use this information, along with the information provided by other individuals, for<br>research, performance measurement or evaluation purposes. CIC will not use this information to make any decisions about you personally.<br>Do you consent to be contacted by CIC, or an organization at CIC`s request, in the future?<br>I understand that CIC is collecting my personal information to assess whether I should be granted a study permit and will use this information to verify my eligibility for a study permit as<br>well as my compliance with the conditions of my study permit. CIC may disclose my personal information to CBSA to enforce the requirements of the Immigration and Refugee Protection<br>Act.<br>I also understand that CIC may disclose my personal information to my designated learning institution to inquire whether I am in compliance with the conditions of my study permit. I<br>consent to the disclosure of my personal information by my designated learning institution to CIC for the purpose of determining whether I am in compliance with these conditions. Failure<br>to provide such consent will result in a refusal to grant a study permit.<br><br>I declare that I have answered all questions in this application fully and truthfully.<br><br><br>Signature of Applicant or Parent/Legal Guardian's for a person under 18 years of age.<br>Date: YYYY-MM-DD</td>
            </tr>
        </thead>
    </table>
    <b>DISCLOSURE</b>
    <table class="tg">
        <thead>
            <tr>
                <td class="tg-0lax">Vivamus sit amet maximus elit. Aliquam nec erat gravida urna placerat pulvinar. Aenean massa dui, accumsan id lectus at, semper gravida erat. Etiam sit amet malesuada leo. Pellentesque sodales elit ac nunc tempor semper. Sed nec mauris tortor. Donec elit justo, elementum id pellentesque in, efficitur at neque. Sed et libero sodales magna auctor feugiat. Suspendisse potenti. Phasellus consequat enim sit amet finibus auctor. Aliquam erat volutpat. Sed elementum augue ut lorem tristique, id efficitur neque pretium. Sed aliquet ultrices diam, eu mollis velit feugiat id. Praesent felis purus, eleifend sed tristique in, commodo vitae purus. Integer eleifend enim nec tincidunt auctor. Praesent convallis lectus mi. Donec et sodales magna, at ultrices dolor. Duis mattis nulla et eros auctor euismod. Morbi erat sapien, condimentum id lacus a, vulputate rhoncus libero. Curabitur a arcu et justo laoreet consectetur ut eget leo. In et sapien dui. Morbi id ante vel augue eleifend pretium nec ut nisi. Proin pharetra tristique sem, non interdum erat vehicula sit amet. Nam imperdiet ornare nisi eget feugiat. Phasellus sit amet ante id enim maximus laoreet at ac erat.<br><br> In elit lectus, pharetra at erat quis, fermentum pellentesque ex. Integer condimentum laoreet odio, eget fringilla ante accumsan at. Vivamus tristique in purus vitae euismod. Duis dui risus, accumsan sed consectetur a, ultrices et enim. Donec consequat, dui quis semper faucibus, lacus diam vulputate nulla, sed auctor ante quam eu libero. Sed sed lectus ac ligula elementum dapibus. Nunc a ligula dui. Nam tincidunt lorem feugiat mauris imperdiet, a rutrum quam scelerisque. Phasellus ut augue fringilla, vestibulum dui et, aliquam nunc. Suspendisse maximus nisl mauris, sed vulputate felis consectetur a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam viverra, neque in laoreet vehicula, lorem orci consequat nunc, non laoreet libero sapien quis elit. Suspendisse non vehicula orci, a mattis mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam vulputate nulla nec ex tincidunt eleifend.<br><br>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc odio ligula, vulputate vel vestibulum in, commodo at elit. Donec cursus eget massa ut sodales. Vivamus vitae iaculis sapien. Praesent nec elementum diam, vitae molestie nisl. Morbi in elit fermentum, hendrerit turpis id, ornare elit. Fusce eros ligula, dictum a rhoncus pretium, egestas in quam. Sed scelerisque eget elit nec sagittis. Morbi sit amet fringilla augue. In pulvinar ipsum eget mattis lacinia. Cras suscipit iaculis viverra. Donec nec leo enim. Maecenas risus sem, congue ac elit in, commodo vulputate dolor. Morbi in nisl nec nisl egestas luctus. Etiam malesuada metus velit. Donec at nisl a orci interdum vulputate. Sed non libero condimentum, ornare lacus fringilla, dapibus diam. Sed viverra lacinia quam, in ultricies arcu.</td>
            </tr>
        </thead>
    </table>

    <style type="text/css">
        div {
            padding: 5px;
        }

        table {
            width: 100%;
        }

        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-0lax {
            text-align: left;
            vertical-align: top
        }
    </style>