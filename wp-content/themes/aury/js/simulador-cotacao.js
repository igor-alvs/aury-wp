document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("form-simulador");
    const numPessoasInput = document.getElementById("num-pessoas");
    const idadesPessoasDiv = document.getElementById("idades-pessoas");
    const resultadoDiv = document.getElementById("resultado-cotacao");

    // Atualiza os inputs de faixa etária com base no número de pessoas
    numPessoasInput.addEventListener("input", () => {
        const numPessoas = parseInt(numPessoasInput.value) || 0;
        idadesPessoasDiv.innerHTML = ""; // Limpa os inputs existentes

        if (numPessoas > 0) {
            const faixas = [
                { faixa: "De 0 a 18 anos", id: "De 0 a 18 anos" },
                { faixa: "De 19 a 23 anos", id: "De 19 a 23 anos" },
                { faixa: "De 24 a 28 anos", id: "De 24 a 28 anos" },
                { faixa: "De 29 a 33 anos", id: "De 29 a 33 anos" },
                { faixa: "De 34 a 38 anos", id: "De 34 a 38 anos" },
                { faixa: "De 39 a 43 anos", id: "De 39 a 43 anos" },
                { faixa: "De 44 a 48 anos", id: "De 44 a 48 anos" },
                { faixa: "De 49 a 53 anos", id: "De 49 a 53 anos" },
                { faixa: "De 54 a 58 anos", id: "De 54 a 58 anos" },
                { faixa: "59 anos ou mais", id: "59 anos ou mais" },
            ];

            faixas.forEach(({ faixa, id }) => {
                const faixaDiv = document.createElement("div");
                faixaDiv.classList.add("mt-2");

                faixaDiv.innerHTML = `
                    <label for="${id}">Número de pessoas na faixa ${faixa}:</label>
                    <input type="number" id="${id}" name="${id}" min="0" max="${numPessoas}" value="0" required>
                `;
                idadesPessoasDiv.appendChild(faixaDiv);
            });
        }
    });

    // Envia os dados para o backend via AJAX
    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const numPessoas = parseInt(numPessoasInput.value);
        if (isNaN(numPessoas) || numPessoas <= 0) {
            alert("Por favor, informe um número válido de pessoas.");
            return;
        }

        // Coleta os valores de cada faixa etária
        const faixas = [
            "De 0 a 18 anos",
            "De 19 a 23 anos",
            "De 24 a 28 anos",
            "De 29 a 33 anos",
            "De 34 a 38 anos",
            "De 39 a 43 anos",
            "De 44 a 48 anos",
            "De 49 a 53 anos",
            "De 54 a 58 anos",
            "59 anos ou mais"
        ];

        const dadosFaixas = {};
        let totalPessoas = 0;

        faixas.forEach((faixa) => {
            const faixaInput = document.getElementById(faixa);
            const valor = parseInt(faixaInput.value) || 0;
            dadosFaixas[faixa] = valor;
            totalPessoas += valor;
        });

        // Verifica se o número total de pessoas corresponde ao informado
        if (totalPessoas !== numPessoas) {
            alert("A soma das faixas deve ser igual ao número total de pessoas.");
            return;
        }

        try {
            // Envia os dados para o backend
            const response = await fetch(simulador_vars.ajax_url + "?action=simulador_cotacao", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ num_pessoas: numPessoas, faixas: dadosFaixas }),
            });

            if (!response.ok) {
                throw new Error("Erro ao calcular a cotação.");
            }

            const result = await response.json();
            if (!result.success) {
                throw new Error(result.data || "Erro desconhecido.");
            }

            // Renderiza os resultados
            const resultados = result.data.todos_planos;
            const ecoPlano = result.data.melhor_plano;
            const completoPlano = result.data.caro_plano;

            resultadoDiv.innerHTML = `
                <h3>Resultado:</h3>
                <p>O plano mais econômico é <strong>${ecoPlano.operadora} - ${ecoPlano.nome}</strong> com um valor de <strong>R$${ecoPlano.valor.toFixed(2)}</strong>.</p>
                <p>O plano mais completo é <strong>${completoPlano.operadora} - ${completoPlano.nome}</strong> com um valor de <strong>R$${completoPlano.valor.toFixed(2)}</strong>.</p>
                <br>
                <div class="row" id="tabelas-resultados">
                    <div class="col-6">
                        <h4>Proposta Econômica</h4>
                        <br>
                        <table border="1" cellpadding="5" style="width: 100%; margin-bottom: 20px;">
                            <tr>
                                <th>Operadora</th>
                                <th>Plano</th>
                                <th>Valor (R$)</th>
                            </tr>
                            <tr>
                                <td>${ecoPlano.operadora}</td>
                                <td>${ecoPlano.nome}</td>
                                <td>${ecoPlano.valor.toFixed(2)}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <h4>Proposta Mais Completa</h4>
                        <br>
                        <table border="1" cellpadding="5" style="width: 100%;">
                            <tr>
                                <th>Operadora</th>
                                <th>Plano</th>
                                <th>Valor (R$)</th>
                            </tr>
                            <tr>
                                <td>${completoPlano.operadora}</td>
                                <td>${completoPlano.nome}</td>
                                <td>${completoPlano.valor.toFixed(2)}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-center gap-3 mt-3">
                    <button type="button" class="btn btn-success" id="gerar-pdf">Gerar PDF</button>
                </div>
            `;

            // Gera o PDF ao clicar no botão
            document.getElementById("gerar-pdf").addEventListener("click", function () {
                if (!window.jspdf || !window.jspdf.jsPDF) {
                    alert("Erro: jsPDF não foi carregado. Verifique a configuração.");
                    return;
                }

                const { jsPDF } = window.jspdf;
                const doc = new jsPDF();

                // Configurações gerais
                const margemEsquerda = 10;
                let posY = 10; // Posição inicial no eixo Y

                // Cabeçalho do PDF
                doc.setFontSize(18);
                doc.text("Proposta de Planos de Saúde", margemEsquerda, posY);
                posY += 10;

                // Seção: Plano mais econômico
                doc.setFontSize(14);
                doc.setTextColor(0, 102, 0); // Verde para destaque
                doc.text("Plano Mais Econômico", margemEsquerda, posY);
                posY += 8;

                doc.setFontSize(12);
                doc.setTextColor(0, 0, 0); // Reseta a cor
                doc.text(`Operadora: ${ecoPlano.operadora}`, margemEsquerda, posY);
                posY += 6;
                doc.text(`Plano: ${ecoPlano.nome}`, margemEsquerda, posY);
                posY += 6;
                doc.text(`Valor: R$${ecoPlano.valor.toFixed(2)}`, margemEsquerda, posY);
                posY += 10;

                // Adiciona uma tabela para o plano mais econômico
                doc.autoTable({
                    startY: posY,
                    head: [["Operadora", "Plano", "Valor (R$)"]],
                    body: [[ecoPlano.operadora, ecoPlano.nome, ecoPlano.valor.toFixed(2)]],
                    theme: "grid",
                    headStyles: { fillColor: [240, 240, 240], textColor: [0, 0, 0] },
                    styles: { fillColor: [204, 255, 204] }, // Verde claro
                });
                posY = doc.autoTable.previous.finalY + 10;

                // Seção: Plano mais completo
                doc.setFontSize(14);
                doc.setTextColor(0, 0, 153); // Azul para destaque
                doc.text("Plano Mais Completo", margemEsquerda, posY);
                posY += 8;

                doc.setFontSize(12);
                doc.setTextColor(0); // Reseta a cor
                doc.text(`Operadora: ${completoPlano.operadora}`, margemEsquerda, posY);
                posY += 6;
                doc.text(`Plano: ${completoPlano.nome}`, margemEsquerda, posY);
                posY += 6;
                doc.text(`Valor: R$${completoPlano.valor.toFixed(2)}`, margemEsquerda, posY);
                posY += 10;

                // Adiciona uma tabela para o plano mais completo
                doc.autoTable({
                    startY: posY,
                    head: [["Operadora", "Plano", "Valor (R$)"]],
                    body: [[completoPlano.operadora, completoPlano.nome, completoPlano.valor.toFixed(2)]],
                    theme: "grid",
                    headStyles: { fillColor: [240, 240, 240], textColor: [0, 0, 0] },
                    styles: { fillColor: [204, 229, 255] }, // Azul claro
                });
                posY = doc.autoTable.previous.finalY + 10;

                // Seção: Todos os planos
                doc.setFontSize(14);
                doc.setTextColor(51, 51, 51); // Cinza escuro
                doc.text("Todos os Planos Disponíveis", margemEsquerda, posY);
                posY += 10;

                const todosPlanosTabela = resultados.map((plano) => [
                    plano.operadora,
                    plano.nome,
                    `R$${plano.valor.toFixed(2)}`,
                ]);

                doc.autoTable({
                    startY: posY,
                    head: [["Operadora", "Plano", "Valor (R$)"]],
                    body: todosPlanosTabela,
                    theme: "striped",
                    headStyles: { fillColor: [240, 240, 240], textColor: [0, 0, 0] },
                    styles: { fillColor: [240, 240, 240] }, // Cinza claro
                });

                // Salva o PDF
                doc.save("proposta_planos_saude.pdf");
            });



        } catch (error) {
            console.error(error);
            resultadoDiv.innerHTML = `<p class="text-danger">Ocorreu um erro ao processar a cotação. Tente novamente.</p>`;
        }
    });
});
