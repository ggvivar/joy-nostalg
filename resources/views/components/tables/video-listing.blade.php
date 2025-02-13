
    <div>

        <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
            <div>
                <h4 class="d-inline fw-bold fs-5">{{ $joblisting[1]->total() }} results</h4>
            </div>
            <div class="d-flex align-items-center">
                <h4 class="d-inline fw-bold fs-5 me-2">Show</h4>
                <select id="perPage" class="form-select form-select-sm fw-bold " style="width: auto;" onchange="changePerPage()">
                    <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                </select>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Group</th>
                    <th>Location</th>
                    <th>Job Posted</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joblisting[0] as $job)
                <tr>
                    <td class="fs-6 fw-bold"><a href="/view/job/description/{{ $job['id'] }}" target="_blank" style="text-decoration: none">{{ $job['Job_Title'] }}</a></td>
                    <td>{{ $job['Group'] }}</td>
                    <td>{{ $job['Location'] }}</td>
                    <td>{{ $job['Job_Posted'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        {{ $joblisting[1]->appends(request()->query())->links('vendor.pagination.default') }}

    </div>
    <script>
    function changePerPage() {
        const perPage = document.getElementById('perPage').value;
        const formData = $('#filter-form').serialize() + `&per_page=${perPage}&page=1`;

        $.ajax({
            url: '{{ url("/search/jobs") }}',
            type: 'GET',
            data: formData,
            success: function(response) {
                $('#job-listing-container').html(response);
            },
            error: function(xhr) {
                console.error('Error fetching job listings:', xhr);
            }
        });
    }

    </script>