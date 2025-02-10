<!DOCTYPE html>
<html>
<body>
    <p>Group: {{ $formData['group'] ?? 'N/A' }}</p>
    <p>Name: {{ $formData['full_name'] ?? 'N/A' }}</p>
    <p>Email: {{ $formData['email'] ?? 'N/A' }}</p>
    <p>Subject: {{ $formData['subject'] ?? 'N/A' }}</p>
    <p>Message: {{ $formData['message'] ?? 'N/A' }}</p>
</body>
</html>
