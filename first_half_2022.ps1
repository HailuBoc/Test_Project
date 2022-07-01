# PowerShell script to create 300 commits scattered in first 6 months of 2022
# No txt files, only actual project file changes

# Remove existing git history and start fresh
Remove-Item -Recurse -Force .git -ErrorAction SilentlyContinue
git init
git remote add origin https://github.com/HailuBoc/Test_Project.git

# Get all actual project files (excluding temp files)
$project_files = Get-ChildItem -Recurse -File | Where-Object { 
    $_.FullName -notlike "*.git*" -and 
    $_.FullName -notlike "*temp*" -and
    $_.FullName -notlike "*.ps1" 
} | ForEach-Object { $_.FullName }

Write-Host "Found $($project_files.Count) project files to work with"

# Generate scattered dates for first 6 months of 2022
function Generate-FirstHalfDates {
    param($maxCommits = 300)
    
    $commit_dates = @()
    $current_date = Get-Date "2022-01-01"
    $end_date = Get-Date "2022-06-30"
    $consecutive_days = 0
    $last_commit_date = $null
    
    while ($current_date -le $end_date -and $commit_dates.Count -lt $maxCommits) {
        $day_of_week = [int]$current_date.DayOfWeek
        $month = $current_date.Month
        
        # Base probability with monthly variation for first half
        if ($month -eq 1) {
            $base_prob = 0.45  # January - moderate activity
        } elseif ($month -eq 2) {
            $base_prob = 0.40  # February - slightly lower
        } elseif ($month -eq 3) {
            $base_prob = 0.55  # March - higher activity (spring)
        } elseif ($month -eq 4) {
            $base_prob = 0.50  # April - good activity
        } elseif ($month -eq 5) {
            $base_prob = 0.60  # May - peak activity
        } else { # June
            $base_prob = 0.52  # June - good activity
        }
        
        # Weekend adjustment
        if ($day_of_week -ge 5) {
            $base_prob *= 0.5  # Lower weekend activity
        }
        
        # Check for consecutive days streak (limit to 3 days)
        if ($last_commit_date -and ($current_date - $last_commit_date).Days -eq 1) {
            $consecutive_days++
            if ($consecutive_days -ge 3) {
                $base_prob *= 0.3  # Lower probability for 4th consecutive day
            }
        } else {
            $consecutive_days = 0
        }
        
        # Random decision for this day
        $rand = Get-Random -Minimum 0 -Maximum 100
        
        # 60% chance of no commits (scattered pattern)
        if ($rand -lt 60) {
            $num_commits_today = 0
        } elseif ($rand -lt 85) {
            # 25% chance of 1-3 commits
            if ((Get-Random -Minimum 0 -Maximum 100) -lt ($base_prob * 100)) {
                $num_commits_today = Get-Random -Minimum 1 -Maximum 4
            } else {
                $num_commits_today = 0
            }
        } else {
            # 15% chance of 4-6 commits (burst days)
            if ((Get-Random -Minimum 0 -Maximum 100) -lt ($base_prob * 85)) {
                $num_commits_today = Get-Random -Minimum 4 -Maximum 7
            } else {
                $num_commits_today = 0
            }
        }
        
        # Generate commits for this day
        if ($num_commits_today -gt 0) {
            for ($i = 0; $i -lt $num_commits_today; $i++) {
                if ($commit_dates.Count -ge $maxCommits) {
                    break
                }
                
                # Random time between 9:00 and 22:00
                $hour = Get-Random -Minimum 9 -Maximum 23
                $minute = Get-Random -Minimum 0 -Maximum 60
                $second = Get-Random -Minimum 0 -Maximum 60
                
                $commit_time = Get-Date -Year $current_date.Year -Month $current_date.Month -Day $current_date.Day -Hour $hour -Minute $minute -Second $second
                $commit_dates += $commit_time
            }
            $last_commit_date = $current_date
        } else {
            # Add random gaps
            if ((Get-Random -Minimum 0 -Maximum 100) -lt 20) {
                $gap_days = Get-Random -Minimum 1 -Maximum 7  # 1-7 days gap
                $current_date = $current_date.AddDays($gap_days)
                $consecutive_days = 0
                continue
            }
        }
        
        $current_date = $current_date.AddDays(1)
    }
    
    # Sort to chronological order
    $commit_dates = $commit_dates | Sort-Object
    return $commit_dates
}

$commit_dates = Generate-FirstHalfDates -maxCommits 300
Write-Host "Generated $($commit_dates.Count) commit dates for Jan-Jun 2022"

# Add all files and create initial commit
git add .
git commit -m "Initial project setup - 2022-01-05 10:00" --date="2022-01-05 10:00:00"

# Create commits using only actual project files
$commit_index = 1
$file_index = 0

foreach ($commit_date in $commit_dates) {
    # Select a project file to modify
    if ($project_files.Count -gt 0) {
        $file_to_modify = $project_files[$file_index % $project_files.Count]
        $file_index++
        
        # Make a small change to the file (add a comment or whitespace)
        $content = Get-Content $file_to_modify -Raw
        if ($content -eq $null) { $content = "" }
        
        # Add a small comment or whitespace change
        $change = "# Commit $commit_index - $($commit_date.ToString('yyyy-MM-dd HH:mm:ss'))"
        if ($file_to_modify -like "*.php") {
            $change = "// Commit $commit_index - $($commit_date.ToString('yyyy-MM-dd HH:mm:ss'))"
        } elseif ($file_to_modify -like "*.js") {
            $change = "// Commit $commit_index - $($commit_date.ToString('yyyy-MM-dd HH:mm:ss'))"
        } elseif ($file_to_modify -like "*.css") {
            $change = "/* Commit $commit_index - $($commit_date.ToString('yyyy-MM-dd HH:mm:ss')) */"
        }
        
        # Add the change to the file
        Add-Content -Path $file_to_modify -Value $change
        git add $file_to_modify
        
        # Create commit with back-dated timestamp
        $date_string = $commit_date.ToString("yyyy-MM-dd HH:mm:ss")
        $time_str = $commit_date.ToString("HH:mm")
        $date_str = $commit_date.ToString("yyyy-MM-dd")
        
        $messages = @('Update project files', 'Add new feature', 'Fix bug', 'Improve code', 'Update configuration', 'Refactor code', 'Add documentation', 'Optimize performance', 'Fix styling', 'Add tests', 'Update dependencies', 'Code review changes', 'Hotfix', 'Implement feature', 'Update README', 'Minor fix', 'Add utility', 'Update docs', 'Code cleanup', 'Enhance functionality', 'Fix issue', 'Improve performance', 'Add validation', 'Update styles', 'Refactor logic')
        $commit_message = $messages[(Get-Random -Minimum 0 -Maximum $messages.Count)] + " - $date_str $time_str"
        
        git commit -m $commit_message --date="$date_string"
        
        $commit_index++
        if ($commit_index % 50 -eq 0) {
            Write-Host "Progress: $commit_index commits created"
        }
    }
}

Write-Host "First half 2022 commit history completed!"
Write-Host "Total commits created: $commit_index"
if ($commit_dates.Count -gt 0) {
    Write-Host "Date range: $($commit_dates[0].ToString('yyyy-MM-dd')) to $($commit_dates[-1].ToString('yyyy-MM-dd'))"
}
