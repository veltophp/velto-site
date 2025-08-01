
    import { Picker } from 'https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js';

    document.addEventListener('DOMContentLoaded', () => {
        // Daftar konfigurasi emoji picker
        const emojiConfig = [
            {
                button: document.getElementById('emoji-btn-title'),
                field: document.getElementById('title'),
                verticalOffset: 10 // Posisi di bawah tombol untuk input
            },
            {
                button: document.getElementById('emoji-btn-content'),
                field: document.getElementById('content'),
                verticalOffset: 10 // Posisi di bawah tombol untuk textarea
            },
            {
                button: document.getElementById('emoji-btn-comment'),
                field: document.getElementById('comment'),
                verticalOffset: 10 // Posisi di bawah tombol untuk comment
            }
        ];

        // Buat emoji picker
        const picker = new Picker();
        picker.style.cssText = `
            position: absolute;
            display: none;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            border-radius: 8px;
            width: 350px;
            max-height: 400px;
            overflow-y: auto;
        `;
        document.body.appendChild(picker);

        // Variabel untuk field aktif
        let activeField = null;

        // Fungsi untuk menampilkan picker dengan posisi yang tepat
        function showPicker(button, field, verticalOffset) {
            const buttonRect = button.getBoundingClientRect();
            const scrollY = window.scrollY || window.pageYOffset;
            
            // Hitung posisi
            let top = buttonRect.bottom + scrollY + verticalOffset;
            let left = buttonRect.left;
            
            // Adjust jika melebihi viewport
            if (left + 350 > window.innerWidth) {
                left = window.innerWidth - 350 - 10;
            }
            if (top + 400 > window.innerHeight + scrollY) {
                top = buttonRect.top + scrollY - 400 - verticalOffset;
            }
            
            // Terapkan posisi
            picker.style.top = `${top}px`;
            picker.style.left = `${left}px`;
            picker.style.display = 'block';
            
            activeField = field;
        }

        // Inisialisasi semua tombol emoji
        emojiConfig.forEach(({button, field, verticalOffset}) => {
            if (!button || !field) return;
            
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                
                if (picker.style.display === 'block' && activeField === field) {
                    picker.style.display = 'none';
                } else {
                    showPicker(button, field, verticalOffset);
                }
            });
        });

        // Insert emoji saat dipilih
        picker.addEventListener('emoji-click', (event) => {
            if (activeField) {
                const emoji = event.detail.unicode;
                const start = activeField.selectionStart;
                const end = activeField.selectionEnd;
                activeField.value = activeField.value.substring(0, start) + emoji + activeField.value.substring(end);
                activeField.selectionStart = activeField.selectionEnd = start + emoji.length;
                activeField.focus();
                picker.style.display = 'none';
            }
        });

        // Tutup picker saat klik di luar
        document.addEventListener('click', (e) => {
            const isEmojiButton = emojiConfig.some(config => 
                config.button && config.button.contains(e.target)
            );
            
            if (!picker.contains(e.target) && !isEmojiButton) {
                picker.style.display = 'none';
            }
        });
    });



    //--------------------------------//

    document.addEventListener('DOMContentLoaded', function () {
        const textarea = document.getElementById('comment');
        const popup = document.getElementById('mention-popup');
        const mentionItem = popup.querySelector('.mention-item');
    
        textarea.addEventListener('input', function () {
            const cursorPos = textarea.selectionStart;
            const text = textarea.value.substring(0, cursorPos);
            const lastWord = text.split(/\s+/).pop();
    
            if (lastWord.startsWith('@')) {
                popup.classList.remove('hidden');
            } else {
                popup.classList.add('hidden');
            }
        });
    
        mentionItem.addEventListener('click', function () {
            const username = this.dataset.username;
            const cursorPos = textarea.selectionStart;
            const textBefore = textarea.value.substring(0, cursorPos);
            const textAfter = textarea.value.substring(cursorPos);
    
            const lastAtIndex = textBefore.lastIndexOf('@');
            const newTextBefore = textBefore.substring(0, lastAtIndex) + '@' + username + ' ';
    
            textarea.value = newTextBefore + textAfter;
            textarea.focus();
            textarea.selectionStart = textarea.selectionEnd = newTextBefore.length;
            popup.classList.add('hidden');
        });
    
        document.addEventListener('click', function (e) {
            if (!popup.contains(e.target) && e.target !== textarea) {
                popup.classList.add('hidden');
            }
        });
    });


    //--------------------------------------------//

    const tagInput = document.getElementById('tag-input');
    const tagContainer = document.getElementById('tag-container');
    const hiddenInput = document.getElementById('tags');

    const colors = ['border border-red-500'];
    const tags = [];

    tagInput.addEventListener('input', function (e) {
        if (e.target.value.includes(',')) {
            const rawTags = e.target.value.split(',');
            rawTags.forEach(tag => {
                const cleanTag = tag.trim();
                if (cleanTag && tags.length < 5 && !tags.includes(cleanTag)) {
                    tags.push(cleanTag);
                    renderTags();
                }
            });
            tagInput.value = '';
        }
    });

    function renderTags() {
        tagContainer.innerHTML = '';
        tags.forEach((tag, index) => {
            const tagElement = document.createElement('span');
            tagElement.className = `flex items-center gap-2 text-gray-800 px-3 py-1 rounded-full text-sm ${colors[index % colors.length]}`;

            const tagText = document.createElement('span');
            tagText.textContent = tag;

            const closeBtn = document.createElement('button');
            closeBtn.textContent = '×';
            closeBtn.className = 'ml-1 text-gray-800 font-bold hover:text-gray-900';
            closeBtn.onclick = () => {
                tags.splice(index, 1);
                renderTags();
            };

            tagElement.appendChild(tagText);
            tagElement.appendChild(closeBtn);
            tagContainer.appendChild(tagElement);
        });

        hiddenInput.value = tags.join(', ');
    }



    // ------ code block docs js --------- 