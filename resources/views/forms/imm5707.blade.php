@include('partials.header')
@section('title', $viewData['page_title'])
@include('partials.footer')

<div><img src="{{ asset('/img/ircc-logo-red.png')}}" width="400"></div>
<div>
    <h3>FAMILY INFORMATION</h3>
</div>
<div>
    <p>Complete <b>ALL</b> names in English and in your native language (for example, Arabic, Cyrillic, Chinese, Chinese commercial/telegraphic code, Korean, or Japanese characters). Include <b>ALL</b> family members even if they are not accompanying you. If additional space is required, print and attach an additional form.</p>
    <b>TYPE OR PRINT IN BLACK INK.</b>
    <hr>
    <b>SECTION A</b>
    <div>
        <table class="tg">
            <thead>
                <tr>
                    <th class="tg-tfda">Name</th>
                    <th class="tg-tfda">Relationship<br>SEE NOTE 1</th>
                    <th class="tg-tfda">Date of birth<br>(YYYY-MM-DD)</th>
                    <th class="tg-tfda">Present address<br>(if deceased: give city/town, country and date</th>
                    <th class="tg-tfda">Will accompany<br>you to Canada?<br>YES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-0pky"><br></td>
                    <td class="tg-7btt" rowspan="2"><br>APPLICANT</td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky" rowspan="2"> <br> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"># <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"></td>
                </tr>
                <tr>
                    <td class="tg-5ece">Marital status: </td>
                    <td class="tg-0pky">Country of birth: <br><br></td>
                    <td class="tg-0pky">Present occupation: </td>
                </tr>
                <tr>
                    <td class="tg-0pky"><br></td>
                    <td class="tg-7btt" rowspan="2">SPOUSE OR<br>COMMON-LAW<br>PARTNER<br></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky" rowspan="2"> <br> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"># <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"></td>
                </tr>
                <tr>
                    <td class="tg-5ece">Marital status: </td>
                    <td class="tg-0pky">Country of birth: <br><br></td>
                    <td class="tg-0pky">Present occupation: </td>
                </tr>
                <tr>
                    <td class="tg-0pky"><br></td>
                    <td class="tg-7btt" rowspan="2"><br>MOTHER</td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky" rowspan="2"> <br> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"># <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"></td>
                </tr>
                <tr>
                    <td class="tg-5ece">Marital status: </td>
                    <td class="tg-0pky">Country of birth: <br><br></td>
                    <td class="tg-0pky">Present occupation: </td>
                </tr>
                <tr>
                    <td class="tg-0pky"><br></td>
                    <td class="tg-7btt" rowspan="2"><br>FATHER</td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky" rowspan="2"> <br> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"># <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"></td>
                </tr>
                <tr>
                    <td class="tg-5ece">Marital status: </td>
                    <td class="tg-0pky">Country of birth: <br><br></td>
                    <td class="tg-0pky">Present occupation: </td>
                </tr>
                <tr>
                    <td class="tg-0pky"><br></td>
                    <td class="tg-7btt" rowspan="2"><br>PARENT</td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky" rowspan="2"> <br> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"># <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"></td>
                </tr>
                <tr>
                    <td class="tg-5ece">Marital status: </td>
                    <td class="tg-0pky">Country of birth: <br><br></td>
                    <td class="tg-0pky">Present occupation: </td>
                </tr>
                <tr>
                    <td class="tg-5ece" colspan="5"><span style="font-weight:bold">NOTE 1: If no spouse or common-law partner is listed in Section A, read and sign below.</span><br><span style="font-weight:bold">I certify that I do not have a spouse or a common-law partner.</span><br><br>Signature: ______________________________________________________ Date (YYYY-MM-DD) _________________<br></td>
                </tr>
            </tbody>
        </table>

        <b>SECTION B - CHILDREN</b> (Include <b>ALL</b> sons and daughters, including <b>ALL</b> adopted and step-children, regardless of age or place of residence)
        <table class="tg">
            <thead>
                <tr>
                    <th class="tg-tfda">Name</th>
                    <th class="tg-tfda">Relationship<br>SEE NOTE 2</th>
                    <th class="tg-tfda">Date of birth<br>(YYYY-MM-DD)</th>
                    <th class="tg-tfda">Present address<br>(if deceased: give city/town, country and date</th>
                    <th class="tg-tfda">Will accompany<br>you to Canada?<br>YES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-0pky"><br></td>
                    <td class="tg-7btt" rowspan="2"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky" rowspan="2"> <br> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"># <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"></td>
                </tr>
                <tr>
                    <td class="tg-5ece">Marital status: </td>
                    <td class="tg-0pky">Country of birth: <br><br></td>
                    <td class="tg-0pky">Present occupation: </td>
                </tr>
                <tr>
                    <td class="tg-0pky"><br></td>
                    <td class="tg-7btt" rowspan="2"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky" rowspan="2"> <br> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"># <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"></td>
                </tr>
                <tr>
                    <td class="tg-5ece">Marital status: </td>
                    <td class="tg-0pky">Country of birth: <br><br></td>
                    <td class="tg-0pky">Present occupation: </td>
                </tr>
                <tr>
                    <td class="tg-0pky"><br></td>
                    <td class="tg-7btt" rowspan="2"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky" rowspan="2"> <br> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"># <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"></td>
                </tr>
                <tr>
                    <td class="tg-5ece">Marital status: </td>
                    <td class="tg-0pky">Country of birth: <br><br></td>
                    <td class="tg-0pky">Present occupation: </td>
                </tr>
                <tr>
                    <td class="tg-0pky"><br></td>
                    <td class="tg-7btt" rowspan="2"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky" rowspan="2"> <br> <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"># <img src="https://static.thenounproject.com/png/60253-200.png" alt="Image" width="35" height="35"></td>
                </tr>
                <tr>
                    <td class="tg-5ece">Marital status: </td>
                    <td class="tg-0pky">Country of birth: <br><br></td>
                    <td class="tg-0pky">Present occupation: </td>
                </tr>
                <tr>
                    <td class="tg-5ece" colspan="5"><span style="font-weight:bold">NOTE 2: If no children are listed in Section B, read and sign below.<br>I certify that I do not have any natural, adopted nor step-children.</span><br><br>Signature: ______________________________________________________ Date (YYYY-MM-DD) _________________<br></td>
                </tr>
            </tbody>
        </table>

        <b>SECTION C - CERTIFICATION</b>
        <table class="tg">
            <tbody>
                <tr>
                    <td class="tg-5ece" colspan="5"><span style="font-weight:bold">I certify that the information contained in this document is complete, accurate and factual. I also realize that once this document has been completed and signed that it will form part of my Immigration Record and will be used to verify my family details on future applications.</span><br><br>Signature: ______________________________________________________ Date (YYYY-MM-DD) _________________<br></td>
                </tr>
                <tr>
                    <td class="tg-5ece" colspan="5"><span style="font-weight:bold">The information you provide on this form is collected under the authority of the Immigration and Refugee Protection Act to determine if you may be admitted to Canada as a temporary resident. It will be stored in Personal Information Bank CIC PPU 055, Visitor Case File. It is protected and accessible under the Privacy Act and the Access to Information Act.<br></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <h5>INSTRUCTIONS</h5>
    <p style="font-size: small;">Who needs to fill out this application form?<br><br>This form must be completed by:
    <ul style="font-size: small;">
        <li>each person, <b>18 years of age or older, or</b></li>
        <li>a minor <b>(less than 18 years of age)</b> travelling alone.</li>
    </ul>
    </p>

    <b>SECTION A</b>
    <table class="tg">
        <tbody>
            <tr>
                <td class="tg-5ece" colspan="5">
                    <span style="font-weight:bold">Write the personal details for: <ul>
                            <li>yourself,</li>
                            <li>your spouse or common-law partner, (if applicable)</li>
                            <li>your mother and</li>
                            <li>your father</li>
                            <li>or parent.</li>
                        </ul>
                        Include: full name, date of birth, country of birth, present address and occupation (job).<br> Check Yes or No to indicate if the person will accompany you to Canada.<br>If a person is deceased, indicate in which city/town, country and the date of death under "Present address".<br>If a person is not employed, indicate whether the person is retired, studying, etc.<br>If a section does not apply to you write "Not applicable" or "N/A".<br><br>Note: If you do not have a spouse or a common-law partner, read "Note 1", sign and date the declaration.
                    </span><br>
                </td>
            </tr>
        </tbody>
    </table>

    <b>SECTION B</b>
    <table class="tg">
        <tbody>
            <tr>
                <td class="tg-5ece" colspan="5">
                    <span style="font-weight:bold">Write the personal details for your children. It is very important that you list all of your children (even if they are already permanent residents or citizens of Canada). This includes: <ul>
                            <li>married children,</li>
                            <li>adopted children,</li>
                            <li>children of your spouse (step-children) or common-law partner,</li>
                            <li>any of your children who have been adopted by others,</li>
                            <li>any of your children who are in the custody of an ex-spouse, former common-law partner or other guardian.</li>
                        </ul>
                        Include: full name, relationship (e.g. brother, step-sister), date of birth, country of birth, marital status (married, single, widowed, common-law, divorced, separated, annulled marriage), present address and occupation (job).<br> Check Yes or No to indicate if the person will accompany you to Canada.<br>If a person is deceased, indicate in which city/town, country and the date of death under "Present address".<br>If a person is not employed, indicate whether the person is retired, studying, etc.<br><br>Note: If you do not have any children, read "Note 2", sign and date the declaration.
                    </span><br>
                </td>
            </tr>
        </tbody>
    </table>

    <b>SECTION C</b>
    <table class="tg">
        <tbody>
            <tr>
                <td class="tg-5ece" colspan="5">
                    <span style="font-weight:bold">Signature<br>
                        Sign and date in the boxes provided at the bottom of the page.<br><br>Note: By signing, you certify that you fully understand the questions asked, and that the information you have provided is complete, accurate and factual. If you do not sign or date the form, your application will be returned to you.
                    </span><br>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br><br><p style="font-size: small;">IMM 5707 (06-2019) E</p>

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

    .tg .tg-tfda {
        background-color: #9b9b9b;
        border-color: inherit;
        color: #000000;
        font-family: Arial, Helvetica, sans-serif !important;
        text-align: center;
        vertical-align: top
    }

    .tg .tg-0pky {
        border-color: inherit;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-7btt {
        border-color: inherit;
        font-weight: bold;
        text-align: center;
        vertical-align: top
    }

    .tg .tg-5ece {
        border-color: inherit;
        font-size: small;
        text-align: left;
        vertical-align: top
    }
</style>