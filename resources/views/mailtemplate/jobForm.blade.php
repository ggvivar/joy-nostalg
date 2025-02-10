<!DOCTYPE html>
<html>
<body>
    <p>Title: {{ $formData['title'] ?? 'N/A' }}</p>
    <p>Group: {{ $formData['group'] ?? 'N/A' }}</p>
    <p>Email: {{ $formData['applicantName'] ?? 'N/A' }}</p>
    <p>Email: {{ $formData['applicantEmail'] ?? 'N/A' }}</p>
    <p>Contact: {{ $formData['applicantContact'] ?? 'N/A' }}</p>
</body>
</html>
