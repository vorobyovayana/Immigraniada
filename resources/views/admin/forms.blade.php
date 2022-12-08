@include('partials.dashboard-header')
@include('partials.dashboard-footer')

<div>
    <form method="POST" action="">
        @csrf
        <br><table class="striped">
            <tr>
                <td>Form</td>
                <td><input type="text" name="formTitle"></td>
            </tr>
            <tr>
                <td>Access URL</td>
                <td><input type="text" name="formUrl"></td>
            </tr>
            <tr>
                <td>Immigration Procedure</td>
                <td><input type="text" name="immigration_procedures_id"></td>
            </tr>
        </table>
        <br><input type="submit" value="Add Form" class="btn btn-outline-secondary">
</div>

<div style="width: 90%; padding: 10px;">
    <br><b>Available Forms</b>
    <table class="table table-hover table-dark table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Form</th>
                <th scope="col">Access URL</th>
                <th scope="col">Immigration Procedure</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>IMM5709 Form</td>
                <td>https://www.canada.ca/content/dam/ircc/migration/ircc/english/pdf/kits/forms/imm5709e.pdf</td>
                <td>Study Permit Extension</td>
                <td>
                    <a href="#">
                        <button class="btn btn-secondary">Edit</button>
                    </a>
                </td>
                <td>
                    <a href="#">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>