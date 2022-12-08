@include('partials.dashboard-header')
@include('partials.dashboard-footer')

<div>
    <form method="POST" action="">
        @csrf
        <br><table class="striped">
            <tr>
                <td>Procedure Title</td>
                <td><input type="text" name="procedureTitle"></td>
            </tr>
            <tr>
                <td>Required Documents</td>
                <td><input type="text" name="requiredDocuments"></td>
            </tr>
            <tr>
                <td>Source</td>
                <td><input type="text" name="source"></td>
            </tr>
        </table>
        <br><input type="submit" value="Add Procedure" class="btn btn-outline-secondary">
</div>

<div style="width: 90%; padding: 10px;">
    <br><b>Existing Procedures</b>
    <table class="table table-hover table-dark table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Procedure Title</th>
                <th scope="col">Required Documents</th>
                <th scope="col">Source</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Study Permit Extension</td>
                <td>IMM5709 Form</td>
                <td>https://www.canada.ca/en/immigration-refugees-citizenship/services/application/application-forms-guides/guide-5552-applying-change-conditions-extend-your-stay-canada-student.html</td>
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