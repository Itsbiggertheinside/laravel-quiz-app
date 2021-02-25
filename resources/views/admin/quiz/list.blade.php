<style>
    .paginate-nav nav {
        background: transparent;
        box-shadow: none;
    }
</style>

<x-app-layout>
    <x-slot name="header">Quiz'ler</x-slot>

    <div class="card">
        <div class="card-content">
            <span class="card-title">
                <a href="{{ route('quiz.create') }}" class="btn">
                    <div class="left" style="width: 26px; height: 26px; transform: translate(-20%, 20%);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    Quiz Ekle
                </a>
            </span>
            <table>
                <thead>
                    <tr>
                        <th>Quiz</th>
                        <th>Durum</th>
                        <th>Bitiş Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($quizzes as $quiz)
                    <tr>
                        <td>{{ $quiz->title }}</td>
                        <td>{{ $quiz->status }}</td>
                        <td>{{ $quiz->finished_at }}</td>
                        <td>
                            <div class="center" style="width: 26px; height: 26px; display: inline-block;">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#B2F141">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                            <div class="center" style="width: 26px; height: 26px; display: inline-block;">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#C70039">
                                        <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm1 8a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="paginate-nav">{{ $quizzes->links() }}</div>
        </div>
    </div>
</x-app-layout>
